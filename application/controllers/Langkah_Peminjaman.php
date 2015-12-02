<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Langkah_Peminjaman extends CI_Controller {
	public function index()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('langkah_peminjaman/index');
		$this->load->view('footer/footer_1');
	}
}
