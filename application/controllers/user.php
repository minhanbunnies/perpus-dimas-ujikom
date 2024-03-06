<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modeluser');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['user'] = $this->modeluser->read_user()->result();
        $this->load->view('layout/up');
        $this->load->view('user/index', $data);
        $this->load->view('layout/down');
    }

    public function create()
    {
        $this->load->view('layout/up');
        $this->load->view('user/create');
        $this->load->view('layout/down');
    }
    public function save()
    {
        $this->form_validation->set_rules('nama', 'Judul Buku', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('jurusan', 'Juerusan', 'required');
        $this->form_validation->set_rules('jk', 'JK', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
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
                echo json_encode($error);
                // redirect('admin/desain');
            } else {
                $up_data = $this->upload->data();
                $filename = $this->upload->data('file_name');


                // gitu doang ge bisa, makanya yang atas ga wajib
                $nama = $this->input->post('nama');
                $kelas = $this->input->post('kelas');
                $jurusan = $this->input->post('jurusan');
                $jk = $this->input->post('jk');
                $alamat = $this->input->post('alamat');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $level = $this->input->post('level');
                $status = $this->input->post('status');
                $foto = $filename;
                $this->modeluser->cr_user($nama, $kelas, $jurusan, $jk, $alamat, $username, $password, $level, $status, $foto);

                redirect(site_url('user'));
            }
        }
    }

    public function update($id)
    {
        $where = ['id_user' => $id];
        $rec = $this->mdl->read_where('user', $where);
        $data['rec'] = $rec[0];

        $this->load->view('layout/up');
        $this->load->view('user/update', $data);
        $this->load->view('layout/down');
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Judul Buku', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('jurusan', 'Juerusan', 'required');
        $this->form_validation->set_rules('jk', 'JK', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
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
                echo json_encode($error);
                // redirect('admin/desain');
            } else {
                $up_data = $this->upload->data();
                $filename = $this->upload->data('file_name');


                // gitu doang ge bisa, makanya yang atas ga wajib
                $nama = $this->input->post('nama');
                $kelas = $this->input->post('kelas');
                $jurusan = $this->input->post('jurusan');
                $jk = $this->input->post('jk');
                $alamat = $this->input->post('alamat');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $level = $this->input->post('level');
                $status = $this->input->post('status');
                $foto = $filename;
                $this->modeluser->update($id, $nama, $kelas, $jurusan, $jk, $alamat, $username, $password, $level, $status, $foto);

                redirect(site_url('user'));
            }
        }
    }
    public function delete($id)
    {
        $where = ['id_user' => $id];
        $this->modeluser->delete($where);

        redirect(site_url('user'));
    }
}
