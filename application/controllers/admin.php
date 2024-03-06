<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelbuku');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('admin');
    }
    public function c_buku()
    {
        $data['buku'] = 'createbuku';
        $this->load->view('createbuku', $data);
    }
    public function cr_buku()
    {
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        if ($this->form_validation->run() == true) {
            // gitu doang ge bisa, makanya yang atas ga wajib
            $judul_buku = $this->input->post('judul_buku');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $pengarang = $this->input->post('pengarang');
            $penerbit = $this->input->post('penerbit');
            $this->mdl->cr_buku($judul_buku, $tahun_terbit, $pengarang, $penerbit);

            redirect(site_url('buku'));
        }
    }
    public function update_buku($id)
    {
        $where = array('id_buku' => $id);
        $rec = $this->mdl->read_where('buku',$where);
        $data = array(
            'rec' => $rec[0],
        );
        $data['buku'] = 'updatebuku';
        $this->load->view('updatebuku',$data);
    }
}
