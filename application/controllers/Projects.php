<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
	{
		$this->load->view('contact_us/contact_us');
	}

	public function websiteapp()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('projects/website_app');
		$this->load->view('footer/footer_1');
	}

	public function mobileapp()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('projects/mobile_app');
		$this->load->view('footer/footer_1');
	}

	public function artdesign()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('projects/art_design');
		$this->load->view('footer/footer_1');
	}

}
