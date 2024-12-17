<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kategori extends CI_Controller {
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
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
			'title_halaman' => '     Content category',
            'kategori' => $kategori
		);
		$this->template->load('template/template','admin/kategori_index',$data);
	} 
    public function save(){
        $this->db->select('*');
        $this->db->where('judul',$this->input->post('judul'));
        $this->db->from('konten');
        $cek = $this->db->get()->row();
        if($cek==NULL){
            $data = array(
                'nama_kategori' => $this->input->post('nama_kategori')     
            );
            $this->db->insert('kategori',$data);            $this->session->set_flashdata('alert', '
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
        redirect('admin/kategori');
    }
    public function delete($id){
		$where = array('id_kategori' => $id);
		$this->db->delete('kategori',$where);
		$this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">  
        Successfully deleted category
        </div>
        ');
			redirect('admin/kategori');
	}
    public function update(){
        // manggil model update  a
        $data = array(
            'nama_kategori'		=>$this->input->post('nama_kategori')
        );
        $where = array(
            'id_kategori' => $this->input->post('id_kategori')
        );
        $this->db->update('kategori',$data,$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">  
        successful change of category
        </div>
        ');
			redirect('admin/kategori');
    }
}
