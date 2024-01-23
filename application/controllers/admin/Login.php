<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('data');
	}

	public function index()
	{
		$data['identitas'] = $this->data->get_all('identitas');
		$this->load->view('loginview', $data);
	}

	public function auth()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {
			// Form validation failed, show login page
			$this->load->view('login_view');
		} else {
			// Form validation passed, attempt login
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->login_model->cek_login($username, $password);

			if ($user) {
				$where = array(
					'username' => $username
				);
				$data['user1'] = $this->login_model->where('user', $where)->result();
				$data = array(
					'username' => $username,
					'id' => $user->id,
					'status' => 'login'
				);
				$this->session->set_userdata($data);
				redirect('admin/dashboard');

			} else {

				echo "Salah Ceng";
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}
