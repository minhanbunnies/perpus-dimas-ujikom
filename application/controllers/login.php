<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login');
    }

    function auth()
    {
        $username = $this->input->post('username', TRUE);
        $password = ($this->input->post('password', TRUE));
        $validate = $this->auth->cek_users($username, $password);
        if ($validate->num_rows() > 0) {
            $data = $validate->row_array();
            if ($data['status'] == 'Aktif') {
                $level = $data['level'];
                $foto = $data['foto'];
                $nama = $data['nama'];
                $sesdata = array(
                    'nama' => $nama,
                    'foto' => $foto,
                    'username' => $username,
                    'password' => $password,
                    'level' => $level,
                    'logged_in' => TRUE,
                    'user' => $data
                );
                $this->session->set_userdata($sesdata);
                redirect(site_url('dashboard'));
            } else {
                echo '<script>alert("Login gagal, akun belum aktif");
                window.location="' . base_url() . '"</script>"';
            }
        } else {
            echo '<script>alert("Login gagal, periksa kembali username dan password anda");
            window.location="' . base_url() . '"</script>"';
        }

    }
}
