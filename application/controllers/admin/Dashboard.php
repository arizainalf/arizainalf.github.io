<?php

class Dashboard extends CI_Controller
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
    $data['kegiatan'] = $this->db->get('kegiatan')->num_rows();
    $data['user'] = $this->db->get('user')->num_rows();
    $data['prestasi'] = $this->db->get('prestasi')->num_rows();
    $data['pengajar'] = $this->db->get('pengajar')->num_rows();
    $data['identitas'] = $this->data->get_all('identitas');
    $this->load->view('template/header_admin', $data);
    $this->load->view(
      'template/topbar_admin',
      $data
    );
    $this->load->view(
      'admin/dashboardview',
      $data
    );
    $this->load->view(
      'template/footer_admin'
    );
  }
}