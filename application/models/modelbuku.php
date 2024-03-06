<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelbuku extends CI_Model {

    public function get_where($where)
    {
        $res=$this->db->get_where('buku',$where);
        return $res;
    }
    public function read_buku()
    {
        $res=$this->db->get('buku');
        return $res;
    }   
    public function jumlah_buku()
    {
        $res=$this->db->get('buku');
        return $res->num_rows();
    }

    function cr_buku($judul_buku,$tahun_terbit,$pengarang,$penerbit,$sampul)
	{
		$data = array(
			'judul_buku' => $judul_buku,
			'tahun_terbit' => $tahun_terbit,
			'pengarang' => $pengarang,
			'penerbit' => $penerbit,
			'sampul' => $sampul
		);
		$this->db->insert('buku',$data);
	}
    
    public function update($id_buku,$judul_buku,$tahun_terbit,$pengarang,$penerbit,$sampul)
    {
        $data = array(
			'judul_buku'=>$judul_buku,
			'tahun_terbit'=>$tahun_terbit,
			'pengarang'=>$pengarang,
			'penerbit'=>$penerbit,
			'sampul'=>$sampul
		);
		$where = array(
			'id_buku'=>$id_buku
		);

		$this->db->where($where);
		$this->db->update("buku",$data);
    }

    public function delete($where)
    {
        $res=$this->db->delete('buku',$where);
        return $res;
    }
}
