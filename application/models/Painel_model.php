<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Painel_model extends CI_Model {   

	public function gasto_administrativo()
	{
		$query = $this->db->get('tb_gastos_admin');
		return $query->result();
	}

	public function gasto_tributos_saude()
	{
		$query = $this->db->get('tb_tributos_saude');
		return $query->result();
	}
	public function gasto_tributos_saude1()
	{
		$query = $this->db->get('tb_tributos_saude');
		return $query->result();
	}
	public function login_consulta($user=NULL)
	{
		$query = $this->db->where(['login' => $user]);
		$query = $this->db->get('tb_usuarios');	

		return $query->result();
	}
	public function login_insert($dados=NULL)
	{
		if(is_array($dados)){
			$this->db->insert('tb_usuarios',$dados);
		}	
	}
	public function login_update()
	{
		$query = $this->db->get('tb_tributos_saude');
		return $query->result();
	}
	
}





?>
