<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Baru extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('data');
  }
  public function index()
  {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['misi'] = $this->data->get_all('misi');
    $data['prestasi'] = $this->data->get_all('prestasi');
    $data['pengajar'] = $this->data->get_all('pengajar');
    $data['kegiatan'] = $this->data->get_all('kegiatan');
    $data['quotes'] = $this->data->get_all('quotes');
    $data['title'] = 'Home';
    $this->load->view('template/head', $data);
    $this->load->view('public/home', $data);
    $this->load->view('template/foot', $data);
  }
}
