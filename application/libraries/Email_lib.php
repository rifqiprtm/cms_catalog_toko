<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_lib {

    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('email');

        // Konfigurasi email
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = 587; // Port untuk TLS
        $config['smtp_user'] = 'udsriwidodo175@gmail.com'; // Ganti dengan alamat email Gmail kamu
        $config['smtp_pass'] = 'pifv vxxe ciuo xwdm'; // Ganti dengan password email Gmail kamu
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;
        $config['smtp_crypto'] = 'tls'; // Enkripsi TLS

        $this->CI->email->initialize($config);
    }

    public function send_email($to, $subject, $message) {
        $this->CI->email->from('udsriwidodo175@gmail.com', 'UD SRIWIDODO '); // Ganti dengan alamat dan nama kamu
        $this->CI->email->to($to);
        $this->CI->email->subject($subject);
        $this->CI->email->message($message);

        // Aktifkan debugging
        if (!$this->CI->email->send()) {
            echo $this->CI->email->print_debugger();
            return false;
        }

        return true;
    }
}
