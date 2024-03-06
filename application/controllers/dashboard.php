<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelbuku');
        $this->load->model('modelpeminjaman');
    }
    public function index()
    {
        $id_user = $this->session->get_userdata()['user']['id_user'];
        $data['peminjaman'] = $this->modelpeminjaman->read_pinjam('peminjaman.id_user = ', $id_user)->result();
        $this->load->view('layout/up');
        $this->load->view('dashboard/index', $data);
        $this->load->view('layout/down');
    }
}