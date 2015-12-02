<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developers extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
	{
		$this->load->view('contact_us/contact_us');
	}

	public function webdevelopers()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('developers/webdevelopers');
		$this->load->view('footer/footer_1');
	}

	public function artdesigners()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('developers/artdevelopers');
		$this->load->view('footer/footer_1');
	}

	public function mobiledevelopers()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('developers/mobiledevelopers');
		$this->load->view('footer/footer_1');
	}

}
