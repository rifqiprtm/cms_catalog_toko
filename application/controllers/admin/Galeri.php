<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeri extends CI_Controller {
    public function __construct(){
        parent ::__construct(); 
        if ($this->session->userdata('level') != 'Konstributor') {  
            redirect('auth');  
        // If level is admin, no action needed, they can access the page
    }
    }

    public function index(){
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $data = array(
            'title_halaman'  => 'Galeri',
            'galeri'      => $galeri
        );
        $this->template->load('template/template','admin/galeri_index',$data);
    }

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/galeri/';
        $config['max_size'] = 10000 * 10000; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);

        if($_FILES['foto']['size'] >= 10000 * 10000    ){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-primary alert-dismissible" role="alert">
                    Photo size is too large, maximum photo upload is 2MB !
                </div>
            ');
            redirect('admin/galeri');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('eror' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

        $data = array(
            'judul' => $this->input->post('judul'),
            'foto'  => $namafoto,
        );
        $this->db->insert('galeri',$data);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible" role="alert">
                successfully added galeri !
            </div>
        ');
        redirect('admin/galeri');
    }
    public function update(){
        $id = $this->input->post('id_galeri'); // Use the ID to identify the record
        $namafoto = date('YmdHis').'.jpg'; // Create a new file name to avoid conflicts
        $config['upload_path'] = 'assets/upload/galeri/';
        $config['max_size'] = 10000 * 10000; // 500KB
        $config['file_name'] = $namafoto;
        $config['overwrite'] = true;
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
    
        if($_FILES['foto']['size'] >= 10000 * 10000){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-primary alert-dismissible" role="alert">
                    Photo size is too large, maximum photo upload is 500KB!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            '); 
            redirect('admin/galeri');
        } elseif(! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
    
            // Delete old file if exists
            $old_file = $this->input->post('nama_foto');
            if(file_exists('./assets/upload/galeri/' . $old_file)){
                unlink('./assets/upload/galeri/' . $old_file);
            }
            
            $data = array(
                'judul' => $this->input->post('judul'),
                'foto'  => $namafoto,
            );
    
            $where = array(
                'id_galeri' => $id // Use ID to update
            );
    
            $this->db->update('galeri', $data, $where);
    
            // notification
            $this->session->set_flashdata('alert', '
                <div class="alert alert-primary alert-dismissible" role="alert">
                    The gallery has been updated successfully!
                </div>
            ');
            redirect('admin/galeri');
        }
    }
    
    

    public function delete($id){
        $filename=FCPATH.'/assets/upload/galeri/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/galeri/".$id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('galeri',$where);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible" role="alert">
                successfully deleted galeri !
            </div>
        ');
        redirect('admin/galeri');
    }
}
?>
