<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Saran_model');
        $this->load->library('Email_lib'); // Load the Email_lib library
        if ($this->session->userdata('level') != 'Konstributor') {  
            redirect('auth');  
        // If level is admin, no action needed, they can access the page
    }
    }

    public function index() {
        $this->db->from('saran');
        $this->db->order_by('id_saran', 'ASC');
        $saran = $this->db->get()->result_array();
        $data = array(
            'title_halaman' => 'Data saran' ,
            'saran'          => $saran
        );
        $this->template->load('template/template','admin/saran',$data);
    }

    public function simpan() { // Metode baru
        $data = array(
            'nama' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'telepon' => $this->input->post('telepon'),
            'isi_saran' => $this->input->post('comment'),
            'tanggal' => date('Y-m-d H:i:s')
        );

        $this->Saran_model->insert_saran($data);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">  
        sukses mengirim saran
        </div>
        ');
        redirect('home',$data);
    }

    public function delete($id){
        $where = array('id_saran' => $id);
        $this->db->delete('saran',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">  
        sukses delete saran
        </div>
        ');
        redirect('admin/saran');
    }

    public function send_reply() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $reply = $this->input->post('reply');

        $subject = 'Balasan Saran Anda';
        $message = '<p>Dear ' . $name . ',</p><p>' . $reply . '</p><p>Regards,<br>Your Company</p>';

        if ($this->email_lib->send_email($email, $subject, $message)) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">
             Fuccessfully sent a reply 
            </div>
            ');
        } else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger" role="alert">
             Failed to send reply 
            </div>
            ');
        }
        redirect('admin/saran');
    }
}
?>
