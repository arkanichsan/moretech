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

		$v['admin_title'] 	= 'Menu';
		$v['script']		= '	<script src="'.base_url().'templates/kamr/js/dashboard/dashboard-1.js"></script>
								<script src="'.base_url().'templates/kamr/vendor/apexchart/apexchart.js"></script>
								<script src="'.base_url().'templates/kamr/vendor/peity/jquery.peity.min.js"></script>
								<script src="'.base_url().'templates/kamr/vendor/chart.js/Chart.bundle.min.js"></script>
								<script>
									var swiper = new Swiper(".front-view-slider", {
										slidesPerView: 5,
										spaceBetween: 30,
										centeredSlides: true,
										loop:true,
										pagination: {
										el: ".room-swiper-pagination",
										clickable: true,
										},
										breakpoints: {
										360: {
											slidesPerView: 1,
											spaceBetween: 20,
										},
										575: {
											slidesPerView: 3,
											spaceBetween: 20,
										},
										768: {
											slidesPerView: 3,
											spaceBetween: 20,
										},
										1024: {
											slidesPerView: 3,
										},
										1400: {
											slidesPerView: 5,
											spaceBetween: 20,
										},
										1600: {
											slidesPerView: 5,
											spaceBetween: 30,
										},
										}
									});
									</script>
									';
		
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

		print_r($data['user']);
	}


}
