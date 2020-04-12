<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
 
	public function index(){
		echo "ini method index pada controller dashboard";
	}
 
	public function halo(){
		$data['nama_web'] = "pengumuman.com";
		$this->load->view('view_dashboard', $data);
	}
 
}