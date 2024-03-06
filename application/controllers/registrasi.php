<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registrasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('registrasi');
    }
    public function proses()
    {
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run() == true) {
            $config['upload_path'] = 'upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            // $config['max_size'] = '2048000';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '1024';
            $config['file_name'] = $this->input->post('foto');
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                echo json_encode    ($error);
                // redirect('admin/desain');
            } else {
                $up_data = $this->upload->data();
                $filename = $this->upload->data('file_name');

                $nama = $this->input->post('nama');
                $jurusan = $this->input->post('jurusan');
                $kelas = $this->input->post('kelas');
                $jk = $this->input->post('jk');
                $alamat = $this->input->post('alamat');
                $username = $this->input->post('username');
                $password = ($this->input->post('password'));
                $level = 'anggota';
                $foto = $filename;
                $this->auth->registrasi($nama, $kelas, $jurusan, $jk, $alamat, $username, $password, $level, $foto);
                redirect('login');
            }
        }
    }
}