<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('modelbuku');
        $this->load->library('form_validation');
        $this->load->helper('url');
	}

    public function index(){
        $data['buku'] = $this->modelbuku->read_buku()->result();
        $this->load->view('layout/up');
        $this->load->view('buku/index', $data);
        $this->load->view('layout/down');
    }

    public function create()
    {
        $this->load->view('layout/up');
        $this->load->view('buku/create');
        $this->load->view('layout/down');
    }
    public function save()
    {
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        if ($this->form_validation->run() == true) {
            $config['upload_path'] = 'upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = $this->input->post('sampul');
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sampul')) {
                $error = array('error' => $this->upload->display_errors());
                echo json_encode($error);
                // redirect('admin/desain');
            } else {
                $up_data = $this->upload->data();
                $filename = $this->upload->data('file_name');


            // gitu doang ge bisa, makanya yang atas ga wajib
            $judul_buku = $this->input->post('judul_buku');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $pengarang = $this->input->post('pengarang');
            $penerbit = $this->input->post('penerbit');
            $sampul = $filename;
            $this->modelbuku->cr_buku($judul_buku, $tahun_terbit, $pengarang, $penerbit,$sampul);

            redirect(site_url('buku'));
        }
    }
}
    public function update($id)
    {
        $where = ['id_buku' => $id];
        $rec = $this->mdl->read_where('buku',$where);
        $data['rec'] = $rec[0];

        $this->load->view('layout/up');
        $this->load->view('buku/update', $data);
        $this->load->view('layout/down');
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        if ($this->form_validation->run() == true) {
            $config['upload_path'] = 'upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            // $config['max_size'] = '2048000';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '1024';
            $config['file_name'] = $this->input->post('sampul');
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sampul')) {
                $error = array('error' => $this->upload->display_errors());
                echo json_encode($error);
                // redirect('admin/desain');
            } else {
                $up_data = $this->upload->data();
                $filename = $this->upload->data('file_name');



            // gitu doang ge bisa, makanya yang atas ga wajib
            $judul_buku = $this->input->post('judul_buku');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $pengarang = $this->input->post('pengarang');
            $penerbit = $this->input->post('penerbit');
            $sampul = $filename;
            $this->modelbuku->update($id, $judul_buku, $tahun_terbit, $pengarang, $penerbit, $sampul);

            redirect(site_url('buku'));
        }
    }
}
    public function delete($id)
    {
        $where= ['id_buku' => $id];
        $this->modelbuku->delete($where);
        
        redirect(site_url('buku'));
    }
}


