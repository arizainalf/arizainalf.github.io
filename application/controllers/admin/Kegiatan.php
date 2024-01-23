<?php

class Kegiatan extends CI_Controller
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
    $data['username'] = $this->session->userdata('username');
    $data['kegiatan'] = $this->data->get_all('kegiatan');
    $data['identitas'] = $this->data->get_all('identitas');
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/kegiatan/index', $data);
    $this->load->view('template/footer_admin');
  }
  public function tambah()
  {
    $data['username'] = $this->session->userdata('username');
    $data['identitas'] = $this->data->get_all('identitas');
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/kegiatan/tambah');
    $this->load->view('template/footer_admin');
  }
  public function edit($id)
  {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['username'] = $this->session->userdata('username');
    $where = array('id' => $id);
    $data['kegiatan'] = $this->data->get_data_by_id('kegiatan', $where)->result();
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/kegiatan/edit', $data);
    $this->load->view('template/footer_admin');
  }
  public function prosestambah()
  {
    $judul = $this->input->post('judul');
    $tempat = $this->input->post('tempat');
    $tanggal = $this->input->post('tanggal');
    $deskripsi = $this->input->post('deskripsi');
    $pembuat = $this->session->userdata('username');

    $config['max_size'] = 2048;
    $config['allowed_types'] = 'png|jpg|jpeg|gif';
    $config['remove_spaces'] = true;
    $config['overwrite'] = true;
    $config['upload_path'] = './assets/img/kegiatan'; // Tambahkan slash (/) di sini

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
      $data_image = $this->upload->data();
      $this->load->helper('random');
      $random_number = generate_random_number();
      // Ubah nama file jika diperlukan
      $new_name = 'kegiatan' . $random_number . $data_image['file_ext'];
      rename($data_image['full_path'], $data_image['file_path'] . $new_name);

      $foto = $new_name;

      $data = array(
        'kegiatan' => $judul,
        'tempat' => $tempat,
        'tanggal' => $tanggal,
        'deskripsi' => $deskripsi,
        'created_by' => $pembuat,
        'update_by' => $pembuat,
        'foto' => $foto,
      );

      // Memanggil model dengan method yang sesuai
      $this->data->input_data('kegiatan', $data);

      redirect('admin/kegiatan/index');
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
    $id = $this->input->post('id'); // Mendapatkan ID yang akan diubah
    $judul = $this->input->post('judul');
    $tempat = $this->input->post('tempat');
    $tanggal = $this->input->post('tanggal');
    $deskripsi = $this->input->post('deskripsi');
    $pembuat = $this->session->userdata('username');


    // Mengatur konfigurasi upload
    $config['max_size'] = 2048; // Ukuran maksimum file (dalam kilobita)
    $config['allowed_types'] = 'png|jpg|jpeg|gif'; // Jenis file yang diizinkan
    $config['remove_spaces'] = true;
    $config['overwrite'] = true;
    $config['upload_path'] = './assets/img/kegiatan';

    $this->load->library('upload', $config);

    // Melakukan unggah gambar
    if ($this->upload->do_upload('foto')) {
      // Menghapus gambar lama sebelum menyimpan yang baru
      $old_image = $this->input->post('foto_existing');
      if (!empty($old_image)) {
        $old_image_path = './assets/img/kegiatan/' . $old_image;
        if (file_exists($old_image_path)) {
          unlink($old_image_path); // Hapus gambar lama
        }
      }

      $data_image = $this->upload->data(); // Mengambil informasi file yang diunggah
      $this->load->helper('random');
      $random_number = generate_random_number();
      // Ubah nama file jika diperlukan
      $new_name = 'prestasi' . $random_number . $data_image['file_ext'];
      rename($data_image['full_path'], $data_image['file_path'] . $new_name);

      $foto = $new_name;
    } else {
      $foto = $this->input->post('foto_existing');
    }

    // Data yang akan diubah
    $data = array(
      'kegiatan' => $judul,
      'tempat' => $tempat,
      'tanggal' => $tanggal,
      'deskripsi' => $deskripsi,
      'update_by' => $pembuat,
      'foto' => $foto,
    );

    // Memanggil model dengan method yang sesuai, untuk mengupdate data
    $this->data->edit_data('kegiatan', $data, $id);

    redirect('admin/kegiatan/index');
  }

  public function delete($id)
  {
    // Mendapatkan informasi gambar sebelum menghapus data dari database
    $kegiatan = $this->data->get_data_by_id('kegiatan', array('id' => $id))->row();
    $foto = $kegiatan->foto;

    // Hapus gambar dari direktori jika ada
    if (!empty($foto)) {
      $image_path = './assets/img/kegiatan/' . $foto;
      if (file_exists($image_path)) {
        unlink($image_path);
      }
    }

    // Hapus data dari database
    $this->data->delete_data('kegiatan', $id);

    redirect('admin/kegiatan/index');
  }
  private function uploadImage($config)
    {
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            // Handle successful upload
            $data_image = $this->upload->data();
            $this->load->helper('random');
            $random_number = generate_random_number();
            $new_name = 'prestasi' . $random_number . $data_image['file_ext'];
            rename($data_image['full_path'], $data_image['file_path'] . $new_name);
            return $new_name;
        } else {
            // Handle upload failure
            return $this->input->post('foto_existing');
        }
    }

}
