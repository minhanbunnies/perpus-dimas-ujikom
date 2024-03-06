<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelpeminjaman');
        $this->load->model('modeluser');
        $this->load->model('modelbuku');
        $this->load->model('modelkategori');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
    public function index()
    {
        $level = $this->session->get_userdata()['user']['level'];
        $id_user = $this->session->get_userdata()['user']['id_user'];
        if ($level == 'anggota') {
            $data['peminjaman'] = $this->modelpeminjaman->read_pinjam('peminjaman.id_user = ', $id_user)->result();
        } else {
            $data['peminjaman'] = $this->modelpeminjaman->read_pinjam()->result();
        }
        $this->load->view('layout/up');
        $this->load->view('peminjaman/index', $data);
        $this->load->view('layout/up');
    }
    public function print()
    {
        $data['peminjaman'] = $this->modelpeminjaman->read_pinjam()->result();
        
        $this->load->view('peminjaman/print', $data);
    }
    public function create()
    {
        $data['user'] = $this->modeluser->get_where(['level' => 'anggota'])->result();
        $data['buku'] = $this->modelbuku->read_buku()->result();
        $data['kategori'] = $this->modelkategori->read_kategori()->result();
        // var_dump($data['kategori']);
        // die;
        $this->load->view('layout/up');
        $this->load->view('peminjaman/create', $data);
        $this->load->view('layout/down');
    }
    public function save()
    {
        $this->form_validation->set_rules('id_buku', 'Nama Buku', 'required');
        $this->form_validation->set_rules('id_user', 'Nama Anggota', 'required');
        $this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required');
        $this->form_validation->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'required');
        // $this->form_validation->set_rules('tgl_harus_kembali', 'Tanggal Harus Kembali', 'required');
        
        if ($this->form_validation->run() == true) {
            // gitu doang ge bisa, makanya yang atas ga wajib
            $id_buku = $this->input->post('id_buku');
            $id_user = $this->input->post('id_user');
            $id_kategori = $this->input->post('id_kategori');
            $tgl_pinjam = $this->input->post('tgl_pinjam');
            // $tgl_harus_kembali = $this->input->post('tgl_harus_kembali');
            $this->modelpeminjaman->cr_peminjaman($id_user, $id_buku, $id_kategori, $tgl_pinjam);

            redirect(site_url('peminjaman'));
        }
    }
    public function update($id)
    {
        $where = ['id_pinjam' => $id];
        $rec = $this->mdl->read_where('peminjaman', $where);
        $data['rec'] = $rec[0];

        $data['user'] = $this->modeluser->get_where(['level' => 'anggota'])->result();
        $data['buku'] = $this->modelbuku->read_buku()->result();

        $this->load->view('layout/up');
        $this->load->view('peminjaman/update', $data);
        $this->load->view('layout/down');
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('id_buku', 'Nama Buku', 'required');
        $this->form_validation->set_rules('id_user', 'Nama Anggota', 'required');
        $this->form_validation->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'required');
        $this->form_validation->set_rules('tgl_harus_kembali', 'Tanggal Harus Kembali', 'required');
        if ($this->form_validation->run() == true) {
            // gitu doang ge bisa, makanya yang atas ga wajib
            $id_buku = $this->input->post('id_buku');
            $id_user = $this->input->post('id_user');
            $tgl_pinjam = $this->input->post('tgl_pinjam');
            $tgl_harus_kembali = $this->input->post('tgl_harus_kembali');
            $this->modelpeminjaman->update($id, $id_user, $id_buku, $tgl_pinjam, $tgl_harus_kembali);

            redirect(site_url('peminjaman'));
        }
    }
    public function delete($id)
    {
        $where = ['id_pinjam' => $id];
        $this->modelpeminjaman->delete($where);

        redirect(site_url('peminjaman'));
    }

    public function kembali($id)
    {
        $this->modelpeminjaman->kembali($id);

        redirect(site_url('peminjaman'));
    }
    public function create_ulasan()
    {
        $data['user'] = $this->modeluser->get_where(['level' => 'anggota'])->result();
        $data['buku'] = $this->modelbuku->read_buku()->result();
        $data['kategori'] = $this->modelkategori->read_kategori()->result();
        $this->load->view('layout/up');
        $this->load->view('peminjaman/createulasan', $data);
        $this->load->view('layout/down');
    }
}