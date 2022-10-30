<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}


	public function index()
	{
		// print_r($this->LoginModel->get_user());die;
		// $data = array();
		$v['topbar'] 			= "";
		// $v['leftbar'] 		= $this->load->view('templates/leftbar', $data, TRUE);
		// $v['rightbar'] 		= $this->load->view('templates/rightbar', $data, TRUE);
		$v['copyright'] 		= "";

		$this->load->view('templates/header', $v);
		$this->load->view('login_view');
		$this->load->view('templates/footer');
	}

	public function login_action()
	{
	
		// print_r($ref); die;

		$data = $this->LoginModel->get_login($this->input->post('username'), $this->input->post('password'));
		// print_r($data);die;

		if ($data == 'User Not Found' || $data == 'Wrong Password') :
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "'.$data.'",
					type: "error"
				});
			');
			redirect(base_url().'login');
		else :
			$newdata = [
				'UID'           => $data->UID,
				'Username'      	=> $data->Username,
				'Nickname'      	=> $data->Nickname,
				'Email'      	=> $data->Email,
				'Company'   	=> $data->Company,
				'CountryUID'   	=> $data->CountryUID,
				'logged_in'         => TRUE
			];
			$this->session->set_userdata('userlogin', $newdata);
			// print_r(((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http").'://'.$ref);die;
			redirect(base_url());
		endif;
	}

	public function remove()
	{
		$this->session->sess_destroy('userdata');
		redirect(base_url('login'));
	}
}
