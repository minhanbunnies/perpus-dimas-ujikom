<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

    // function login_user($username,$password)
    // {
    //     $query = $this->db->get_where('tb_user',array('username'=>$username));
    //     if($query->num_rows() > 0)
    //     {
    //         $data_user = $query->row();
    //         if (password_verify($password, $data_user->password)) {
    //             $this->session->set_userdata('username',$username);
    //             $this->session->set_userdata('nama_petugas',$data_user->nama_petugas);
    //             $this->session->set_userdata('is_login', TRUE);
    //             return TRUE;
    //         } else {
    //             return FALSE;
    //         }
    //     }
    //     else{
    //         return FALSE;
    //     }
    // }

    // function cek_login($table,$where){
    //     return $this->db->get_where($table,$where);
    // }

    function cek_users($username,$password)
    {
        $kondisi = array(
            'username' => $username,
            'password' => $password,
            // 'status' => 'Aktif'
        );

        $this->db->select('*');
        $this->db->from('user');      
        $this->db->where($kondisi);      
        $this->db->limit(1);      
        return $this->db->get();      
    }

    function registrasi($nama,$kelas,$jurusan,$jk,$alamat,$username,$password,$level,$foto)
	{
		$data = array(
			'nama' => $nama,
            'kelas' =>$kelas,
            'jurusan' =>$jurusan,
            'jk' =>$jk,
            'alamat' =>$alamat,
            'username' =>$username,
            'password' =>$password,
            'level' =>$level,
            'foto' =>$foto,
            'status' => 'Aktif'
		);
		$this->db->insert('user',$data);
	}
}
?>