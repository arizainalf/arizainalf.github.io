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
		$this->load->view('template/head');
		$this->load->view('template/foot');
	}
}
