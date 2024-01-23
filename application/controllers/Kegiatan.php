<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('data');
  }
  public function index()
  {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['kegiatan'] = $this->data->get_all('kegiatan');
    $this->load->view('template/headkegiatan', $data);
    $this->load->view('public/kegiatan', $data);
    $this->load->view('template/foot');
  }
  public function detail($id)
  {
    $where = array(
      'id' => $id
    );
    $data['identitas'] = $this->data->get_all('identitas');
    $data['kegiatan'] = $this->data->get_data_by_id('kegiatan', $where)->result();
    $this->load->view('template/headkegiatan', $data);
    $this->load->view('public/detail-kegiatan', $data);
    $this->load->view('template/foot', $data);

  }
}
