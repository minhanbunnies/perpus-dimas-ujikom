<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modeluser extends CI_Model
{

	public function get_where($where)
	{
		$res = $this->db->get_where('user', $where);
		return $res;
	}
	public function read_user()
	{
		$res = $this->db->get('user');
		return $res;
	}
	public function jumlah_user()
	{
		$res = $this->db->get('user');
		return $res->num_rows();
	}
	function cr_user($nama, $kelas, $jurusan, $jk, $alamat, $username, $password, $level, $status, $foto = null)
	{
		$data = array(
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'jk' => $jk,
			'alamat' => $alamat,
			'username' => $username,
			'password' => $password,
			'level' => $level,
			'status' => $status,
			'foto' => $foto,
		);
		$this->db->insert('user', $data);
	}
	function update($id, $nama, $kelas, $jurusan, $jk, $alamat, $username, $password, $level, $status, $foto = null)
	{
		$data = array(
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'jk' => $jk,
			'alamat' => $alamat,
			'username' => $username,
			'password' => $password,
			'level' => $level,
			'status' => $status,
			'foto' => $foto,
		);
		$where = array(
			'id_user' => $id
		);
		$this->db->where($where);
		$this->db->update('user', $data);
	}
	public function delete($where)
	{
		$res = $this->db->delete('user', $where);
		return $res;
	}
}
