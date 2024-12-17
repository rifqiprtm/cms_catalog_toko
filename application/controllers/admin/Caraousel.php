<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel extends CI_Controller {
    public function __construct(){
        parent ::__construct(); 
        if ($this->session->userdata('level') != 'Konstributor') {  
            redirect('auth');  
        // If level is admin, no action needed, they can access the page
    }
    }

    public function index(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $data = array(
            'title_halaman'  => 'Caraousel',
            'caraousel'      => $caraousel
        );
        $this->template->load('template/template','admin/caraousel_index',$data);
    }

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/caraousel/';
        $config['max_size'] = 10000 * 10000; // 500KB
        $config['file_name'] = $namafoto;
        $config['overwrite'] = true;
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
    
        if($_FILES['foto']['size'] >= 10000 * 10000){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-primary alert-dismissible" role="alert">
                    Photo size is too large, maximum photo upload is 2MB !
                </div>
            ');
            redirect('admin/caraousel');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('eror' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

        $data = array(
            'judul' => $this->input->post('judul'),
            'foto'  => $namafoto,
        );
        $this->db->insert('caraousel',$data);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible" role="alert">
                successfully added caraousel !
            </div>
        ');
        redirect('admin/caraousel');
    }
    public function update() {
        $id = $this->input->post('id_caraosel');
        $old_foto = $this->input->post('nama_foto');
    
        $config['upload_path'] = 'assets/upload/caraousel/';
        $config['max_size'] = 500 * 1024; // 500KB
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = date('YmdHis') . '_' . $_FILES['foto']['name'];
    
        $this->load->library('upload', $config);
    
        if ($_FILES['foto']['size'] > 0 && !$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">' . $error['error'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
            redirect('admin/caraousel');
        } else {
            if ($_FILES['foto']['size'] > 0) {
                // Hapus file lama
                if (file_exists(FCPATH . 'assets/upload/caraousel/' . $old_foto)) {
                    unlink(FCPATH . 'assets/upload/caraousel/' . $old_foto);
                }
    
                // Update dengan file baru
                $foto_data = $this->upload->data();
                $new_foto = $foto_data['file_name'];
            } else {
                // Tidak ada file baru, gunakan file lama
                $new_foto = $old_foto;
            }
    
            $data = array(
                'judul' => $this->input->post('judul'),
                'foto' => $new_foto,
            );

            $this->db->where('id_caraosel', $id);
            $this->db->update('caraousel', $data);
    
            // notification
            $this->session->set_flashdata('alert', '
                <div class="alert alert-primary alert-dismissible" role="alert">
                    The carousel has been updated successfully!
                </div>
            ');
            redirect('admin/caraousel');
        }
    }
    
    

    public function delete($id){
        $filename=FCPATH.'/assets/upload/caraousel/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/caraousel/".$id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('caraousel',$where);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible" role="alert">
                successfully deleted caraousel !
            </div>
        ');
        redirect('admin/caraousel');
    }
}
?>
