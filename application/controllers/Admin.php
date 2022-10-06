<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		// check_login();
		// check_admin();
		$this->load->model('MainModel');
		$this->load->model('UserModel');
		// print_r($this->session->userdata('userlogin'));die;
	}


	public function index()
	{
		$data = array(
			'user'=>$this->MainModel->get_user()
			
		);

		$v['admin_title'] 	= 'Dashboard';
		$v['script']		= $this->load->view('script/script_dashboard', $data, TRUE);
		$v['copyright'] 	= $this->load->view('templates/copyright', $data, TRUE);
		
		$this->load->view('templates/header', $v);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/leftbar');
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('templates/footer');
	}

	public function detail($id=false)
	{
		// print_r($id);
		$data = array(
			'user'=>$this->MainModel->get_user_detail($id)
			
		);

		print_r($data['userx	']);
	}


}
