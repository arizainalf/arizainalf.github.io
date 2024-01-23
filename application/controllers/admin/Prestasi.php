<?php

class Prestasi extends CI_Controller {
  public function __construct() {
    parent::__construct();
    if(!$this->session->userdata('username')) {
      redirect('admin/login');
    }
    $this->load->model('data');
  }
  public function index() {
    $data['username'] = $this->session->userdata('username');
    $data['identitas'] = $this->data->get_all('identitas');
    $data['prestasi'] = $this->data->get_all('prestasi');
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/prestasi/index', $data);
    $this->load->view('template/footer_admin');
  }
  public function tambah() {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['username'] = $this->session->userdata('username');
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/prestasi/tambah');
    $this->load->view('template/footer_admin');
  }
  public function edit($id) {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['username'] = $this->session->userdata('username');
    $where = array('id' => $id);
    $data['prestasi'] = $this->data->get_data_by_id('prestasi', $where)->result();
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/prestasi/edit', $data);
    $this->load->view('template/footer_admin');
  }
  public function prosestambah() {
    $judul = $this->input->post('prestasi');
    $tingkat = $this->input->post('tingkat');
    $deskripsi = $this->input->post('deskripsi');
    $pembuat = $this->session->userdata('username');

    $config['max_size'] = 2048;
    $config['allowed_types'] = 'png|jpg|jpeg|gif';
    $config['remove_spaces'] = true;
    $config['overwrite'] = true;
    $config['upload_path'] = './assets/img/prestasi'; // Tambahkan slash (/) di sini

    $this->load->library('upload', $config);

    if($this->upload->do_upload('foto')) {
      $data_image = $this->upload->data();
      $this->load->helper('random');
      $random_number = generate_random_number();
      // Ubah nama file jika diperlukan
      $new_name = 'prestasi'.$random_number.$data_image['file_ext'];
      rename($data_image['full_path'], $data_image['file_path'].$new_name);

      $foto = $new_name;

      $data = array(
        'prestasi' => $judul,
        'tingkat' => $tingkat,
        'deskripsi' => $deskripsi,
        'foto' => $foto,
        'created_by' => $pembuat,
        'update_by' => $pembuat
      );

      // Memanggil model dengan method yang sesuai
      $this->data->input_data('prestasi', $data);

      redirect('admin/prestasi/index');
    } else {
      // Jika upload gagal, Anda dapat melakukan manajemen kesalahan di sini
      var_dump($_POST);
      var_dump($_FILES);
      $error = $this->upload->display_errors();
      echo $error;
      // atau mengarahkan pengguna kembali ke halaman sebelumnya.
    }
  }

  public function prosesedit() {
    $id = $this->input->post('id'); // Anda perlu mendapatkan ID yang akan diubah
    $prestasi = $this->input->post('prestasi');
    $tingkat = $this->input->post('tingkat');
    $pengedit = $this->session->userdata('username');
    $deskripsi = $this->input->post('deskripsi');

    // Mengatur konfigurasi upload
    $config['max_size'] = 2048;
    $config['allowed_types'] = 'png|jpg|jpeg|gif';
    $config['remove_spaces'] = true;
    $config['overwrite'] = true;
    $config['upload_path'] = './assets/img/prestasi';

    $this->load->library('upload', $config);

    if($this->upload->do_upload('foto')) {
      $data_image = $this->upload->data();
      $this->load->helper('random');
      $random_number = generate_random_number();
      // Ubah nama file jika diperlukan
      $new_name = 'prestasi'.$random_number.$data_image['file_ext'];
      rename($data_image['full_path'], $data_image['file_path'].$new_name);

      $foto = $new_name;
      $old_image = $this->input->post('foto_existing');
      if(!empty($old_image)) {
        $old_image_path = './assets/img/prestasi/'.$old_image;
        if(file_exists($old_image_path)) {
          unlink($old_image_path); // Hapus gambar lama
        }
      }

      $data_image = $this->upload->data(); // Mengambil informasi file yang diunggah
      $foto = $data_image['file_name']; // Mengambil nama file yang diunggah
    } else {
      $foto = $this->input->post('foto_existing');
    }

    // Data yang akan diubah
    $data = array(
      'prestasi' => $prestasi,
      'tingkat' => $tingkat,
      'deskripsi' => $deskripsi,
      'foto' => $foto,
      'update_by' => $pengedit,
    );

    // Memanggil model dengan method yang sesuai, untuk mengupdate data
    $this->data->edit_data('prestasi', $data, $id);
    // var_dump($_FILES);
    redirect('admin/prestasi/index');
  }
  public function hapus($id) {
    // Mendapatkan informasi gambar sebelum menghapus data dari database
    $prestasi = $this->data->get_data_by_id('prestasi', array('id' => $id))->row();
    $foto = $prestasi->foto;

    // Hapus gambar dari direktori jika ada
    if(!empty($foto)) {
      $image_path = './assets/img/prestasi/'.$foto;
      if(file_exists($image_path)) {
        unlink($image_path);
      }
    }

    // Hapus data dari database
    $this->data->delete_data('prestasi', $id);

    redirect('admin/prestasi/index');
  }

}
