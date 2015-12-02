<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('jadwal/index');
		$this->load->view('footer/footer_1');
	}
	
	public function detail_jadwal()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('jadwal/jadwal_detail');
		$this->load->view('footer/footer_1');
	}
}
