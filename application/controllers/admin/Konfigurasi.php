<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        if ($this->session->userdata('level') != 'admin') {  
            redirect('auth'); 
        }
    }
	public function index(){
		$this->db->from('konfigurasi');
		//menampilke perentah
		$konfig = $this->db->get()->row();
		// variablel title
		$data = array(
			'title_halaman' => 'Web profile',
			'konfig'        => $konfig
		);

		//manggil templet
		//manggil halaman
		$this->template->load('template/template','admin/konfigurasi',$data);
	}
	public function update(){
        $where = array('id_konfigurasi'  =>1);
        $data = array(
			'judul_website'   => $this->input->post('judul'),
			'profil_website'  => $this->input->post('profil_website'),
			'instagram'       => $this->input->post('instagram'),
			'tiktok'          => $this->input->post('tiktok'),
			'email'           => $this->input->post('email'),
			'alamat'   		  => $this->input->post('alamat'),
			'no_wa' 		  => $this->input->post('no_wa'),
			'youtube' 		  => $this->input->post('youtube'),
			'x'					=> $this->input->post('x'),
			'telegram' 		  => $this->input->post('telegram'),
			'facebook' 		  => $this->input->post('facebook'),
		);
        //update 
        $this->db->update('konfigurasi',$data,$where);
         //alert
         $this->session->set_flashdata('alert', '
         <div class="alert alert-primary alert-dismissible" role="alert">
          Yeayy berhasil memperbarui konfigurasi nihh 
         </div>
         '); 
         redirect('admin/konfigurasi');
    }
}
