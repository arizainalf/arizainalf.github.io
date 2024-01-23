<?php

// class Identitas extends CI_Controller
// {
//     public function __construct()
//     {
//         parent::__construct();
//         if (!$this->session->userdata('username')) {
//             redirect('admin/login');
//         }
//         $this->load->model('data');
//     }

//     public function index()
//     {
//         $data['username'] = $this->session->userdata('username');
//         $data['identitas'] = $this->data->get_all('identitas');
//         $this->load->view('template/header_admin', $data);
//         $this->load->view('template/topbar_admin', $data);
//         $this->load->view('admin/identitas/index', $data);
//         $this->load->view('template/footer_admin');
//     }

//     public function prosesedit()
//     {
//         // Validate form data using CodeIgniter form validation library

//         $this->load->helper('random');
//         $random_number = generate_random_number();
//         $id = $this->input->post('id');

//         // Handle file uploads
//         $logo = $this->handleFileUpload('logo', 'logo_sekolah_lama', 'logo');
//         $foto_kepsek = $this->handleFileUpload('foto_kepsek', 'foto_kepsek_lama', 'kepsek');
//         $favicon = $this->handleFileUpload('favicon', 'favicon_lama', 'favicon');
//         $foto = $this->handleFileUpload('foto', 'foto_lama', 'foto');

//         // Process other form data
//         $nama_sekolah = $this->input->post('nama_sekolah');
//         $nama_kepala_sekolah = $this->input->post('nama_kepsek');
//         $alamat = $this->input->post('alamat');
//         $tentang_sekolah = $this->input->post('tentang_sekolah');
//         $sambutan_kepsek = $this->input->post('sambutan_kepsek');
//         $telepon = $this->input->post('telepon');
//         $email = $this->input->post('email');
//         $facebook = $this->input->post('facebook');
//         $instagram = $this->input->post('instagram');

//         // Data to be updated
//         $data = array(
//             'nama_sekolah' => $nama_sekolah,
//             'nama_kepsek' => $nama_kepala_sekolah,
//             'foto_kepsek' => $foto_kepsek,
//             'alamat_sekolah' => $alamat,
//             'logo_sekolah' => $logo,
//             'favicon_sekolah' => $favicon,
//             'foto_sekolah' => $foto,
//             'tentang_sekolah' => $tentang_sekolah,
//             'sambutan_kepsek' => $sambutan_kepsek,
//             'telepon' => $telepon,
//             'email' => $email,
//             'facebook' => $facebook,
//             'instagram' => $instagram
//         );

//         // Update data in the database
//         $this->data->edit_data('identitas', $data, $id);

//         redirect('admin/identitas/index');
//     }

//     private function handleFileUpload($input_name, $old_image_field, $new_name_prefix)
//     {
//         $this->load->library('upload');

//         $config['max_size'] = 2048;
//         $config['allowed_types'] = 'png|jpg|jpeg|gif';
//         $config['remove_spaces'] = true;
//         $config['overwrite'] = true;
//         $config['upload_path'] = './assets/img/identitas/';

//         $this->upload->initialize($config);

//         if ($this->upload->do_upload($input_name)) {
//             // Delete old image
//             $old_image = $this->input->post($old_image_field);
//             if (!empty($old_image)) {
//                 $old_image_path = './assets/img/identitas/' . $old_image;
//                 if (file_exists($old_image_path)) {
//                     unlink($old_image_path);
//                 }
//             }

//             $data_image = $this->upload->data();
//             $new_name = $new_name_prefix . $random_number . $data_image['file_ext'];
//             rename($data_image['full_path'], $data_image['file_path'] . $new_name);

//             return $new_name;
//         } else {
//             return $this->input->post($input_name . '_lama');
//         }
//     }
// }
class Identitas extends CI_Controller
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
    $data['identitas'] = $this->data->get_all('identitas');
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/identitas/index', $data);
    $this->load->view('template/footer_admin');
  }

  public function prosesedit()
  {
    // Validate form data using CodeIgniter form validation library

    $this->load->helper('random');
    $random_number = generate_random_number();
    $id = $this->input->post('id');

    // Handle file uploads
    $logo = $this->handleFileUpload('logo', 'logo_sekolah_lama', 'logo');
    $foto_kepsek = $this->handleFileUpload('foto_kepsek', 'foto_kepsek_lama', 'kepsek');
    $favicon = $this->handleFileUpload('favicon', 'favicon_lama', 'favicon');
    $foto = $this->handleFileUpload('foto', 'foto_lama', 'foto');

    // Process other form data
    $nama_sekolah = $this->input->post('nama_sekolah');
    $nama_kepala_sekolah = $this->input->post('nama_kepsek');
    $alamat = $this->input->post('alamat');
    $tentang_sekolah = $this->input->post('tentang_sekolah');
    $sambutan_kepsek = $this->input->post('sambutan_kepsek');
    $telepon = $this->input->post('telepon');
    $email = $this->input->post('email');
    $facebook = $this->input->post('facebook');
    $instagram = $this->input->post('instagram');

    // Data to be updated
    $data = array(
      'nama_sekolah' => $nama_sekolah,
      'nama_kepsek' => $nama_kepala_sekolah,
      'foto_kepsek' => $foto_kepsek,
      'alamat_sekolah' => $alamat,
      'logo_sekolah' => $logo,
      'favicon_sekolah' => $favicon,
      'foto_sekolah' => $foto,
      'tentang_sekolah' => $tentang_sekolah,
      'sambutan_kepsek' => $sambutan_kepsek,
      'telepon' => $telepon,
      'email' => $email,
      'facebook' => $facebook,
      'instagram' => $instagram
    );

    // Update data in the database
    $this->data->edit_data('identitas', $data, $id);

    redirect('admin/identitas/index');
  }

  private function handleFileUpload($input_name, $old_image_field, $new_name_prefix)
  {
    $this->load->helper('random');
    $this->load->library('upload');
    $random_number = generate_random_number();
    $config['max_size'] = 2048;
    $config['allowed_types'] = 'png|jpg|jpeg|gif';
    $config['remove_spaces'] = true;
    $config['overwrite'] = true;
    $config['upload_path'] = './assets/img/identitas/';

    $this->upload->initialize($config);

    if ($this->upload->do_upload($input_name)) {
      // Delete old image
      $old_image = $this->input->post($old_image_field);
      if (!empty($old_image)) {
        $old_image_path = './assets/img/identitas/' . $old_image;
        if (file_exists($old_image_path)) {
          unlink($old_image_path);
        }
      }

      $data_image = $this->upload->data();
      $new_name = $new_name_prefix . $random_number . $data_image['file_ext'];
      rename($data_image['full_path'], $data_image['file_path'] . $new_name);

      return $new_name;
    } else {
      return $this->input->post($input_name . '_lama');
    }
  }
}
