<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_card extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
	{
		$data=array(
		'h' => $this->db->query("call show_all_chard(1)"),
		'b'=> 2,
		'c'=>0		);
		$this->load->view('home/home',$data);
	}

	public function card($id)
	{
		$this->db->where("id",$id);
        $query=$this->db->get("home");
		$this->load->view('home/home',$query);
	}
}
