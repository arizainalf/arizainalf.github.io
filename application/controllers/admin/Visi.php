<?php

class Visi extends CI_Controller
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
    $data['misi'] = $this->data->get_all('misi');
    $data['visi'] = $this->data->get_all('identitas');
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/visi/index', $data);
    $this->load->view('template/footer_admin');
  }
  public function tambah()
  {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['username'] = $this->session->userdata('username');
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/visi/tambah');
    $this->load->view('template/footer_admin');
  }
  public function edit($id)
  {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['username'] = $this->session->userdata('username');
    $where = array('id' => $id);
    $data['misi'] = $this->data->get_data_by_id('misi', $where)->result();
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('admin/visi/edit', $data);
    $this->load->view('template/footer_admin');
  }
  public function editvisi()
  {
    $id = $this->input->post('id');
    $visi = $this->input->post('visi');
    $data = array(
      'visi' => $visi
    );

    // Memanggil model dengan method yang sesuai, untuk mengupdate data
    $this->data->edit_data('identitas', $data, $id);
    // echo $id;
    // echo $visi;
    redirect('admin/visi/index');
  }
  public function tambahmisi()
  {
    $misi = $this->input->post('misi');
    $pembuat = $this->session->userdata('username');

    $data = array(
      'misi' => $misi,
      'created_by' => $pembuat,
      'update_by' => $pembuat
    );
    // Memanggil model dengan method yang sesuai
    $this->data->input_data('misi', $data);

    redirect('admin/visi/index');
  }
  public function editmisi()
  {
    $id = $this->input->post('id');
    $misi = $this->input->post('misi');
    $pembuat = $this->session->userdata('username');

    $data = array(
      'misi' => $misi,
      'update_by' => $pembuat

    );
    // Memanggil model dengan method yang sesuai, untuk mengupdate data
    $this->data->edit_data('misi', $data, $id);
    // var_dump($_FILES);
    redirect('admin/visi/index');
  }
  public function hapus($id)
  {
    $this->data->delete_data('misi', $id);
    redirect('admin/visi/index');
  }

}
