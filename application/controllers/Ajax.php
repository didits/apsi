<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }

	public function index()
	{
		$this->load->view('register/index');
	}

	public function register_or_login()
	{
		//$this->load->view('navbar/no_menu');
		$this->load->view('ajax/register_or_login');
	}

	public function halaman_utama()
	{
		$this->load->view('navbar/no_menu');
		$this->load->view('ajax/halaman_utama');
		$this->load->view('footer');
	}


	public function medpart()
	{
		$this->load->view('navbar/back_to_home');
		$this->load->view('ajax/medpart');
	}

	public function contact()
	{
		$this->load->view('navbar/no_menu');
		$this->load->view('ajax/contact');
		$this->load->view('footer');
	}

	public function webapp()
	{
		$this->load->view('navbar/no_menu');
		$this->load->view('ajax/webapp');
		$this->load->view('footer');
	}

	public function mobileapp()
	{
		$this->load->view('navbar/no_menu');
		$this->load->view('ajax/mobileapp');
		$this->load->view('footer');
	}

	public function webdevelopers()
	{
		$this->load->view('navbar/no_menu');
		$this->load->view('ajax/webdevelopers');
		$this->load->view('footer');
	}

	public function mobiledevelopers()
	{
		$this->load->view('navbar/no_menu');
		$this->load->view('ajax/mobiledevelopers');
		$this->load->view('footer');
	}

	public function artdevelopers()
	{
		$this->load->view('navbar/no_menu');
		$this->load->view('ajax/artdevelopers');
		$this->load->view('footer');
	}
}
