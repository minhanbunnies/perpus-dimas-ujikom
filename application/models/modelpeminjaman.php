<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modelpeminjaman extends CI_Model
{

	public function get_where($where, $namatb)
	{
		$res = $this->db->get_where($where, $namatb);
		return $res;
	}
	public function read_pinjam($cond = null, $where = null)
	{
		$this->db->select('peminjaman.*, user.nama as nama, buku.judul_buku as judul_buku, kategori.nama as kategori')
			->from('peminjaman')
			->join('user', 'user.id_user = peminjaman.id_user')
			->join('buku', 'buku.id_buku = peminjaman.id_buku')
			->join('kategori', 'kategori.id_kategori = peminjaman.id_kategori');
		if ($where != null)  {
			$this->db->where($cond, $where);
		}
		$res = $this->db->get();

		// $res = $this->db->get('peminjaman');
		return $res;
	}
	public function jumlah_pinjam()
	{
		$res = $this->db->get('peminjaman');
		return $res->num_rows();
	}
	function cr_peminjaman($id_user, $id_buku, $id_kategori, $tgl_pinjam)
	{
		$data = array(
			'id_user' => $id_user,
			'id_buku' => $id_buku,
			'id_kategori' => $id_kategori,
			'tgl_pinjam' => $tgl_pinjam,
			// 'tgl_harus_kembali' => $tgl_harus_kembali,
			// 'tgl_kembali' => $tgl_kembali,
			// 'denda' => $denda,
		);
		
		$this->db->insert('peminjaman', $data);
	}
	public function update($id_pinjam, $id_user, $id_buku, $tgl_pinjam, $tgl_harus_kembali)
	{
		$data = array(
			'id_user' => $id_user,
			'id_buku' => $id_buku,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_harus_kembali' => $tgl_harus_kembali,
		);
		$where = array(
			'id_pinjam' => $id_pinjam
		);
		$this->db->where($where);
		$this->db->update("peminjaman", $data);
	}
	public function delete($where)
	{
		$res = $this->db->delete('peminjaman', $where);
		return $res;
	}

	public function kembali($id_pinjam)
	{
		$res = $this->db->get_where('peminjaman', ['id_pinjam' => $id_pinjam])->result_array();
		
		$denda = 2000;
		$kembali = date('Y-m-d');
		$date1 = new DateTime($res[0]['tgl_harus_kembali']);
		$date2 = new DateTime($kembali);
		$total_telat  = $date2->diff($date1)->format('%a');

		$data = array(
			'tgl_kembali' => $kembali,
			'denda' => $total_telat * $denda
		);
		$where = array(
			'id_pinjam' => $id_pinjam
		);
		$this->db->where($where);
		$this->db->update("peminjaman", $data);
	}
}
