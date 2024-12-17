<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        $this->load->model('User_model');
        $this->load->model('Saran_model');

    }

    public function index(){
        // Fetch configuration
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
    
        // Fetch caraousel
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
    
        // Fetch categories 
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
    
        // Fetch toko
        $this->db->from('toko');
        $this->db->order_by('nama_toko','ASC');
        $toko = $this->db->get()->result_array();
        
        $data_konten = array();
    
        foreach ($kategori as $kat) {
            $this->db->select('a.*, b.id_kategori,b.nama_kategori, c.nama as creator_name, d.nama_toko ');
            $this->db->from('konten a');
            $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
            $this->db->join('user c', 'a.username=c.username', 'left');
            $this->db->join('toko d', 'a.id_toko=d.id_toko', 'left');
            $this->db->where('a.id_kategori', $kat['id_kategori']);
            $this->db->order_by('tanggal', 'DESC');
            $konten = $this->db->get()->result_array();
            $data_konten[$kat['nama_kategori']] = $konten;
            // $data_konten[$kat['nama_kategori']] = $konten;
            // $data_konten[$kat['id_kategori'].$kat['nama_kategori']] = $konten;

            // $data_kategori[$kat['id_kategori']] = $konten;

            $this->db->select('*');
            $this->db->from('kategori');
            // $this->db->where('id_kategori', $kat['id_kategori']);
            $kategori = $this->db->get()->result_array();
        }
    
        $data = array(
            'title'     => "TOKO SRI WIDODO",
            'konfig'    => $konfig,
            // 'kategori'  => $kategori,
            'toko'  => $toko,   // Pastikan $toko diteruskan ke view
            'caraousel' => $caraousel,
            'data_konten' => $data_konten,
            'kategori' => $kategori,
        );
        // var_dump($data_konten);
        // die;
        $this->template->load('template/template_home', 'home/home', $data);
    }
    
    public function galeri(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('toko');
        $toko = $this->db->get()->result_array();


        $this->db->from('konten');
        $konten = $this->db->get()->result_array();

        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();

        $data = array(
            'title' => "Galeri",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'toko' => $toko,
            'konten' => $konten,
            'galeri' => $galeri
        );  
        $this->template->load('template/template_home', 'home/galeri', $data);

    }
    // Function for displaying content by category
    public function kategori($id){
        // Fetch configuration
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        // Fetch caraousel
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        // Fetch categories
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('toko');
        $toko = $this->db->get()->result_array();

        // Fetch content by category with joins
        $this->db->select('a.*, b.nama_kategori, c.nama as creator_name, d.nama_toko');
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->join('toko d', 'a.id_toko=d.id_toko', 'left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();

        // Fetch the name of the selected category
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        
        $data = array(
            'title'         =>  $nama_kategori,
            'nama_kategori' => $nama_kategori,
            'toko'  => $toko,
            'konfig'        => $konfig,
            'kategori'      => $kategori,
            'konten'        => $konten,
        );
        $this->template->load('template/template_home', 'home/kategori', $data);
    }
    public function kategori_toko ($id_kategori,$id_toko){
        // Fetch configuration
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        // Fetch caraousel
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        // Fetch categories
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('toko');
        $toko = $this->db->get()->result_array();

        // Fetch content by category with joins
        $this->db->select('a.*, b.nama_kategori, c.nama as creator_name, d.nama_toko');
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->join('toko d', 'a.id_toko=d.id_toko', 'left');
        $this->db->where('a.id_kategori', $id_kategori);
        $this->db->where('d.id_toko', $id_toko);
        $konten = $this->db->get()->result_array();
        // var_dump($konten);
        // die;

        // Fetch the name of the selected category
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id_kategori);
        // $this->db->where('id_toko', $id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        
        $data = array(
            'title'         =>  $nama_kategori,
            'nama_kategori' => $nama_kategori,
            'toko'  => $toko,
            'konfig'        => $konfig,
            'kategori'      => $kategori,
            'konten'        => $konten,
        );
        $this->template->load('template/template_home', 'home/kategori', $data);
    }
    public function toko($id_toko){
        // Fetch configuration
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
    
        // Fetch categories
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
    
        // Fetch toko
        $this->db->from('toko');
        $this->db->order_by('nama_toko','ASC');
        $toko = $this->db->get()->result_array();
    
        $data_konten = array();
    
        foreach ($kategori as $kat) {
            $this->db->select('a.*, b.id_kategori, b.nama_kategori, c.nama as creator_name, d.nama_toko');
            $this->db->from('konten a');
            $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
            $this->db->join('user c', 'a.username=c.username', 'left');
            $this->db->join('toko d', 'a.id_toko=d.id_toko', 'left');
            $this->db->where('a.id_kategori', $kat['id_kategori']);
            $this->db->where('a.id_toko', $id_toko); // Adjust this line to filter by id_toko
            $this->db->order_by('tanggal', 'DESC');
            $konten = $this->db->get()->result_array();
            $data_konten[$kat['nama_kategori']] = $konten;
        }
    
        $data = array(
            'title'     => "TOKO SRI WIDODO",
            'konfig'    => $konfig,
            'toko'      => $toko,   // Make sure $toko is passed to the view
            'data_konten' => $data_konten,
            'kategori'  => $kategori,
        );
    
        $this->template->load('template/template_home', 'home/toko', $data);
    }
    
    public function toko1($id){
        // Fetch configuration
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
    
        // Fetch caraousel
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
    
        // Fetch categories
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
    
        // Fetch toko data and get the name of the selected toko
        $this->db->from('toko');
        $this->db->where('id_toko', $id);
        $toko_data = $this->db->get()->row();
        $nama_toko = $toko_data->nama_toko;
    
        // Fetch all toko data (list of all toko)
        $this->db->from('toko');
        $toko = $this->db->get()->result_array();
    
        // Fetch content by toko with joins
        $this->db->select('a.*, b.nama_toko, c.nama as creator_name');
        $this->db->from('konten a');
        $this->db->join('toko b', 'a.id_toko=b.id_toko', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('a.id_toko', $id);
        $konten = $this->db->get()->result_array();
    
        $data = array(
            'title'     => $nama_toko,
            'nama_toko' => $nama_toko,
            'konfig'    => $konfig,
            'kategori'  => $kategori,
            'toko'      => $toko,
            'caraousel' => $caraousel,
            'konten'    => $konten
        );
        $this->template->load('template/template_home', 'home/toko', $data);
    }
    

    public function artikel($id){
        // Fetch caraousel
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        
        // Fetch configuration
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        // Fetch categories
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('toko');
        $toko = $this->db->get()->result_array();

        // Fetch article details with joins
        $this->db->select('a.*, b.nama_kategori, c.nama as creator_name, d.nama_toko');
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->join('toko d', 'a.id_toko=d.id_toko', 'left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();

        $data = array(
            'title'     => $konten->judul,
            'konfig'    => $konfig,
            'kategori'  => $kategori,
            'toko'  => $toko,
            'caraousel' => $caraousel,
            'konten' => $konten,
        );
        $this->template->load('template/template_home', 'home/detail', $data);
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
    

    // Function for displaying the menu
    public function menu(){
        $this->template->load('template/template_home', 'home/menu');
    }
}
