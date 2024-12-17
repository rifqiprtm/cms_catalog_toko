<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();   
        // load model user model 
        $this->load->model('user_model');
        if ($this->session->userdata('nama')==NULL) {  
            redirect('auth');  
        }
    }
	public function index(){
		// varibel untuk di halaman template
		$data = array(
			'title_halaman' => 'Dashboard'
		);
		
		$this->template->load('template/template','admin/dashboard',$data);
	}
}