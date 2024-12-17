<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class konten extends CI_Controller {
    public function __construct(){
        parent::__construct();   
        // load model user model  
        $this->load->model('user_model');
        if ($this->session->userdata('level') != 'Konstributor') {  
            redirect('auth');  
        // If level is admin, no action needed, they can access the page
    }
    }
    public function index() {
        // Query kategori
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
    
        // Query toko
        $this->db->from('toko');
        $this->db->order_by('nama_toko', 'ASC');
        $toko = $this->db->get()->result_array();
    
        // Query konten with join
        $this->db->select('a.*, b.nama_kategori, c.nama as creator_name, d.nama_toko');
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->join('toko d', 'a.id_toko=d.id_toko', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();
    
        $data = array(
            'title_halaman' => 'Content',
            'kategori' => $kategori,
            'konten' => $konten,
            'toko' => $toko
        );
    // aa 
        $this->template->load('template/template', 'admin/konten_index', $data);
    }
    

    
    // simpan
    public function save(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size'] = 2048 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited //
        $config['allowed_types']        = '*';
        $config['file_name']            = $namafoto;
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
        <div class="alert alert-success" role="alert">  
            Photo size is too large, maximum photo upload is 2MB !
        </div>
        ');
        redirect('admin/konten');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('eror' => $this->upload->display_errors());
        }else {
            $data = array('upload_data' => $this->upload->data());
        }
        $this->db->from('konten');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
        $this->session->set_flashdata('alert', '
        <div class="alert alert-primary alert-dismissible" role="alert">
            The content title already exists, replace it with another title !
        </div>
        ');
        redirect('admin/konten');
        }
        $data = array(
            'judul'         => $this->input->post('judul'),
            'harga'         => $this->input->post('harga'),
            'barcode'         => $this->input->post('barcode'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'id_toko'   => $this->input->post('id_toko'),
            'keterangan'    => $this->input->post('keterangan'),
            'tanggal'       => date('Y-m-d'),
            'foto'          => $namafoto,
            'username'      => $this->session->userdata('username'),
            'slug'          => str_replace(' ','-',$this->input->post('judul'))
        );
        $this->db->insert('konten',$data);
        //nontifikasi
        $this->session->set_flashdata('alert', '
        <div class="alert alert-primary alert-dismissible" role="alert">
         The content has been saved successfully !
        </div>
        
        ');
        redirect('admin/konten');
    }
    public function delete($id){
        $filename=FCPATH.'/assets/upload/konten/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/konten/".$id);
        }
    $where = array(
        'foto'  => $id
    );
    //perintah hapus
    $this->db->delete('konten',$where);
     //nontifikasi
     $this->session->set_flashdata('alert', '
     <div class="alert alert-primary alert-dismissible" role="alert">
      successfully deleted content !
     </div>
     ');
			redirect('admin/konten');
	}
    public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
        <div class="alert alert-primary alert-dismissible" role="alert">
            Photo size is too large, maximum photo upload is 2MB !
        </div>
        '); 
        redirect('admin/konten');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else {
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
            'judul'         => $this->input->post('judul'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'id_toko'   => $this->input->post('id_toko'),
            'keterangan'    => $this->input->post('keterangan'),
            'harga'         => $this->input->post('harga'),
            'barcode'         => $this->input->post('barcode'),
            'slug'          => str_replace(' ','-',$this->input->post('judul'))
        );
        $where = array(
            'foto'    => $this->input->post('nama_foto')
        );
        $this->db->update('konten',$data,$where);
        //nontifikasi
        $this->session->set_flashdata('alert', '
        <div class="alert alert-primary alert-dismissible" role="alert">
         The content has been updated successfully !
        </div>
        ');
        redirect('admin/konten');
    }
}
