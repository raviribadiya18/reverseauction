<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class video extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('menu_helper');
	}
	
	public function index()
	{
		$this->load->view('comman/top_header');
		$this->load->view('comman/header');
		$this->load->view('video_view');
		$this->load->view('comman/footer');
	}
}
