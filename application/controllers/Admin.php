<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('header/header_2');
		$this->load->view('navbar/no_menu_2');
		$this->load->view('admin/index');
		$this->load->view('footer/footer_1');
	}
	
	public function data_penyewaan()
	{
		$this->load->view('header/header_2');
		$this->load->view('navbar/no_menu_2');
		$this->load->view('admin/data_penyewaan');
		$this->load->view('footer/footer_1');
	}
}
