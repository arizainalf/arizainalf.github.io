<?php

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("data");
  }
  public function index()
  {
    $data['identitas'] = $this->data->get_all('identitas');
    $data['misi'] = $this->data->get_all('misi');
    $data['prestasi'] = $this->data->get_all('prestasi');
    $data['pengajar'] = $this->data->get_all('pengajar');
    $data['kegiatan'] = $this->data->get_limit('kegiatan');
    $data['quotes'] = $this->data->get_all('quotes');
    $data['title'] = 'Home';
    $this->load->view('template/head', $data);
    $this->load->view('public/home', $data);
    $this->load->view('template/foot', $data);
  }
  public function naonwe()
  {
    $data['title'] = 'Home';
    $data['sekolah'] = 'Mi Al-Musthofa Karim';
    $data['identitas'] = $this->data->get_all('identitas');
    $data['kegiatan'] = $this->data->get_all('kegiatan');
    $data['prestasi'] = $this->data->get_all('prestasi');
    $data['pengajar'] = $this->data->get_all('pengajar');
    $this->load->view('template/header', $data);
    $this->load->view('homeview', $data);
    $this->load->view('template/footer', $data);
  }
}
