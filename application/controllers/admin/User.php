<?php
class User extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('username')) {
			redirect('admin/login');
		}
		$this->load->model('data');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$data['identitas'] = $this->data->get_all('identitas');
		$data['user'] = $this->data->get_all('user');
		$this->load->view('template/header_admin', $data);
		$this->load->view('template/topbar_admin', $data);
		$this->load->view('admin/user/index', $data);
		$this->load->view('template/footer_admin');
	}
	public function tambah() {
		$data['identitas'] = $this->data->get_all('identitas');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('template/header_admin', $data);
		$this->load->view('template/topbar_admin', $data);
		$this->load->view('admin/user/tambah');
		$this->load->view('template/footer_admin');
	}
	public function prosestambah() {
		// echo 'gaada ceng';
		// $id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => password_hash($password, PASSWORD_DEFAULT),
		);
		// var_dump($data);
		$this->data->input_data('user', $data);
		redirect('admin/user/index');

	}
	public function edit($id) {
		$data['username'] = $this->session->userdata('username');
		$where = array('id' => $id);
		$data['user'] = $this->data->get_data_by_id('user', $where)->result();
		$this->load->view('template/header_admin', $data);
		$this->load->view('template/topbar_admin');
		$this->load->view('admin/user/edit', $data);
		$this->load->view('template/footer_admin');
	}
	public function prosesedit() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => password_hash($password)
		);
		$this->data->edit_data('user', $data, $id);
		redirect('admin/user/');
		// Jika upload gagal, Anda dapat melakukan manajemen kesalahan di sini
		// var_dump($_POST);
		// var_dump($_FILES);
		// $error = $this->upload->display_errors();
		// echo $error;
		// atau mengarahkan pengguna kembali ke halaman sebelumnya.

	}

	public function delete($id) {
		$this->data->delete_data('user', $id);
		redirect('admin/user/index');
	}

}