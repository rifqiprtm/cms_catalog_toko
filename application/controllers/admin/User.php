<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();   
        // load model user model  
        $this->load->model('user_model');
        
        // Check user level
        if ($this->session->userdata('level') != 'admin') {  
            redirect('auth');  
        // If level is admin, no action needed, they can access the page
    }
    }
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array(
			'title_halaman' => 'User data',
            'user' => $user
		);
		$this->template->load('template/template','admin/user_index',$data);
	} 
    public function save(){
        $this->db->select('*');
        $this->db->where('username',$this->input->post('username'));
        $this->db->from('user');
        $cek = $this->db->get()->row();
        if($cek==NULL){
            $this->user_model->save();
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">  
            sukses insert user
            </div>
            ');
        } else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">  
            username is already in use
            </div>
            ');
        }
        redirect('admin/user');
    }
    public function delete($id){
		$where = array('id_user' => $id);
		$this->db->delete('user',$where);
		$this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">  
        sukses delete user
        </div>
        ');
			redirect('admin/user');
	}
    public function update(){
        // manggil model update  a
        $this->user_model->update();
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">  
        sukses update user
        </div>
        ');
			redirect('admin/user');
    }
}
