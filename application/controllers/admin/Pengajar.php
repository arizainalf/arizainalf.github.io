<?php

class Pengajar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      redirect('admin/login');
    }
    $this->load->model('data');
  }
  public function index()
  {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['username'] = $this->session->userdata('username');
    $data['pengajar'] = $this->data->get_all('pengajar');
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/pengajar/index', $data);
    $this->load->view('template/footer_admin');
  }
  public function tambah()
  {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['username'] = $this->session->userdata('username');
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/pengajar/tambah');
    $this->load->view('template/footer_admin');
  }
  public function edit($id)
  {
    $data['username'] = $this->session->userdata('username');
    $data['identitas'] = $this->data->get_all('identitas');
    $where = array('id' => $id);
    $data['pengajar'] = $this->data->get_data_by_id('pengajar', $where)->result();
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/pengajar/edit', $data);
    $this->load->view('template/footer_admin');
  }
  public function prosestambah()
  {
    $nama = $this->input->post('nama');
    $kontak = $this->input->post('kontak');
    $jabatan = $this->input->post('jabatan');
    $pembuat = $this->session->userdata('username');

    $config['max_size'] = 2048;
    $config['allowed_types'] = 'png|jpg|jpeg|gif';
    $config['remove_spaces'] = true;
    $config['overwrite'] = true;
    $config['upload_path'] = './assets/img/pengajar/'; // Tambahkan slash (/) di sini

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
      $data_image = $this->upload->data();
      $this->load->helper('random');
      $random_number = generate_random_number();
      // Ubah nama file jika diperlukan
      $new_name = 'prestasi' . $random_number . $data_image['file_ext'];
      rename($data_image['full_path'], $data_image['file_path'] . $new_name);

      $foto = $new_name;

      $data = array(
        'nama' => $nama,
        'foto' => $foto,
        'kontak' => $kontak,
        'jabatan' => $jabatan,
        'created_by' => $pembuat,
        'update_by' => $pembuat,
      );

      // Memanggil model dengan method yang sesuai
      $this->data->input_data('pengajar', $data);

      redirect('admin/pengajar/index');
    } else {
      // Jika upload gagal, Anda dapat melakukan manajemen kesalahan di sini
      var_dump($_POST);
      var_dump($_FILES);
      $error = $this->upload->display_errors();
      echo $error;
      // atau mengarahkan pengguna kembali ke halaman sebelumnya.
    }
  }
  public function prosesedit()
  {
    $id = $this->input->post('id'); // Anda perlu mendapatkan ID yang akan diubah
    $nama = $this->input->post('nama');
    $kontak = $this->input->post('kontak');
    $jabatan = $this->input->post('jabatan');
    $pembuat = $this->session->userdata('username');

    // Mengatur konfigurasi upload
    $config['max_size'] = 2048;
    $config['allowed_types'] = 'png|jpg|jpeg|gif';
    $config['remove_spaces'] = true;
    $config['overwrite'] = true;
    $config['upload_path'] = './assets/img/pengajar/';

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
      // Jika ada unggahan gambar, ambil nama file baru
      $data_image = $this->upload->data();
      $this->load->helper('random');
      $random_number = generate_random_number();
      // Ubah nama file jika diperlukan
      $new_name = 'prestasi' . $random_number . $data_image['file_ext'];
      rename($data_image['full_path'], $data_image['file_path'] . $new_name);

      $foto = $new_name;
    } else {
      // Jika tidak ada unggahan gambar, gunakan foto yang ada sebelumnya
      $foto = $this->input->post('foto_existing');
    }

    // Data yang akan diubah
    $data = array(
      'nama' => $nama,
      'foto' => $foto,
      'kontak' => $kontak,
      'jabatan' => $jabatan,
      'update_by' => $pembuat
    );

    // Memanggil model dengan method yang sesuai, untuk mengupdate data
    $this->data->edit_data('pengajar', $data, $id);
    // var_dump($_FILES);
    redirect('admin/pengajar/index');
  }
  public function delete($id)
  {
    // Mendapatkan informasi gambar sebelum menghapus data dari database
    $pengajar = $this->data->get_data_by_id('pengajar', array('id' => $id))->row();
    $foto = $pengajar->foto;

    // Hapus gambar dari direktori jika ada
    if (!empty($foto)) {
      $image_path = './assets/img/pengajar/' . $foto;
      if (file_exists($image_path)) {
        unlink($image_path);
      }
    }

    // Hapus data dari database
    $this->data->delete_data('pengajar', $id);

    redirect('admin/pengajar/index');
  }

}
