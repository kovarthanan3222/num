<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('frontend/header_view');
		$this->load->view('frontend/home_view');
		$this->load->view('frontend/footer_view');
	}
}
