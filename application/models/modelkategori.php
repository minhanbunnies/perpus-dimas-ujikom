<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelkategori extends CI_Model {

	public function get_where($where)
    {
        $res=$this->db->get_where('kategori',$where);
        return $res;
    }
    public function read_kategori()
    {
        $res=$this->db->get('kategori');
        return $res;
    }   
    public function jumlah_kategori()
    {
        $res=$this->db->get('kategori');
        return $res->num_rows();
    }
    function cr_kategori($nama)
	{
		$data = array(
			'nama' => $nama,
		);
		$this->db->insert('kategori',$data);
	}
    public function update($id,$nama)
    {
        $data = array(
			'nama'=>$nama
		);
		$where = array(
			'id_kategori'=>$id
		);

		$this->db->where($where);
		$this->db->update("kategori",$data);
    }
    public function delete($where)
    {
        $res=$this->db->delete('kategori',$where);
        return $res;
    }
}
