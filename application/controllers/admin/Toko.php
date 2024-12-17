<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class toko extends CI_Controller {
    public function __construct(){
        parent::__construct();   
        // load model user model  
        $this->load->model('user_model');
        if ($this->session->userdata('level') != 'Konstributor') {  
            redirect('auth');  
        // If level is admin, no action needed, they can access the page
    }
    }
	public function index(){
        $this->db->from('toko');
        $this->db->order_by('nama_toko','ASC');
        $toko = $this->db->get()->result_array();
        $data = array(
			'title_halaman' => 'Shop',
            'toko' => $toko
		);
		$this->template->load('template/template','admin/toko',$data);
	} 
    public function save(){
        $this->db->select('*');
        $this->db->where('judul',$this->input->post('judul'));
        $this->db->from('konten');
        $cek = $this->db->get()->row();
        if($cek==NULL){
            $data = array(
                'nama_toko' => $this->input->post('nama_toko')     
            );
            $this->db->insert('toko',$data);            $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">  
            Successfully added category
            </div>
            ');
        } else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">  
            category is already in use
            </div>
            ');
        }
        redirect('admin/toko');
    }
    public function delete($id){
		$where = array('id_toko' => $id);
		$this->db->delete('toko',$where);
		$this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">  
        Successfully deleted category
        </div>
        ');
			redirect('admin/toko');
	}
    public function update(){
        // manggil model update  a
        $data = array(
            'nama_toko'		=>$this->input->post('nama_toko')
        );
        $where = array(
            'id_toko' => $this->input->post('id_toko')
        );
        $this->db->update('toko',$data,$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">  
        successful change of category
        </div>
        ');
			redirect('admin/toko');
    }
}
