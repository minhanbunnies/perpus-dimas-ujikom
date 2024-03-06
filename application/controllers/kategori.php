<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('modelkategori');
        $this->load->library('form_validation');
	}

    public function index(){
        $data['kategori'] = $this->modelkategori->read_kategori()->result();
        $this->load->view('layout/up');
        $this->load->view('kategori/index', $data);
        $this->load->view('layout/down');
    }
    
    public function create()
    {
        $this->load->view('layout/up');
        $this->load->view('kategori/create');
        $this->load->view('layout/down');
    }
    public function save()
    {
        $this->form_validation->set_rules('nama', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == true) {
            $nama = $this->input->post('nama');
            $this->modelkategori->cr_kategori($nama);

            redirect(site_url('kategori'));
        }
    }
    public function update($id)
    {
        $where = ['id_kategori' => $id];
        $rec = $this->mdl->read_where('kategori',$where);
        $data['rec'] = $rec[0];

        $this->load->view('layout/up');
        $this->load->view('kategori/update', $data);
        $this->load->view('layout/down');
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == true) {
            $nama = $this->input->post('nama');
            $this->modelkategori->update($id,$nama);

            redirect(site_url('kategori'));
        }
    }
    public function delete($id)
    {
        $where= ['id_kategori' => $id];
        $this->modelkategori->delete($where);
        
        redirect(site_url('kategori'));
    }
}


