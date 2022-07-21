<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

#	public function __construct(){
	#	parent::__construct();
		#$this->load->model()
#	}

	public function index()
	{
		//$user_inf=$this->login();
		//$acesso=$user_inf['acesso'];
		
		//if ($acesso == "Administrator"){		
			$this->load->view('layout/topo');
			$this->load->view('layout/conteudo');
			$this->load->view('layout/rodape');
		//}else{
			
			//$this->load->view('sem_acesso');
		//}
	}
	
	public function painel()
	{
		$this->load->view('layout/topo');
		$this->load->view('layout/conteudo');
		$this->load->view('layout/rodape');
	}
	public function gasto_administrativo()
	{
		$this->load->model('Painel_model', 'painel');
		$data['admin'] = $this->painel->gasto_administrativo();

		$this->load->view('layout/topo', $data);
		$this->load->view('gastos/gastos_admin');
		$this->load->view('layout/rodape');

	}
	
	public function gasto_tributos_saude()
	{
		$this->load->model('Painel_model', 'painel');
		$data['admin'] = $this->painel->gasto_tributos_saude();

		$this->load->view('layout/topo', $data);
		$this->load->view('gastos/gasto_tributos_saude');
		$this->load->view('layout/rodape');

	}
	public function contasha_tabela1()
	{
		$this->load->view('layout/topo');
		$this->load->view('contasha/tabela1');
		$this->load->view('layout/rodape');
	}
	public function contasha_tabela2()
	{
		$this->load->view('layout/topo');
		$this->load->view('contasha/tabela2');
		$this->load->view('layout/rodape');
	}
	public function contasha_tabela4()
	{
		$this->load->view('layout/topo');
		$this->load->view('contasha/tabela4');
		$this->load->view('layout/rodape');
	}
	public function contasha_grafico2()
	{
		$this->load->view('layout/topo');
		$this->load->view('contasha/grafico2');
		$this->load->view('layout/rodape');
	}
	public function contasha_grafico4()
	{
		$this->load->view('layout/topo');
		$this->load->view('contasha/grafico4');
		$this->load->view('layout/rodape');
	}
	public function contasha_tabela11()
	{
		$this->load->view('layout/topo');
		$this->load->view('contasha/tabela11');
		$this->load->view('layout/rodape');
	}
	public function contasha_tabela12()
	{
		$this->load->view('layout/topo');
		$this->load->view('contasha/tabela12');
		$this->load->view('layout/rodape');
	}
	
	/*	
	public function login()
	{
		
		$user=$_SERVER['REMOTE_USER'];
		$user = explode("\\", $user);
		$user= $user[1]; // piece1				
		
		$this->load->model('Painel_model', 'painel');
		$usuarios=$this->painel->login_consulta($user);
		if(empty($usuarios)) {
			$informacoes['acesso']="Sem Acesso";			
		}else{
			
			foreach($usuarios as $usuario ){}
			$informacoes['nome'] = $usuario->nome;
			$informacoes['departamento']=$usuario->departamento;
			$informacoes['login']=$usuario->login;
			$informacoes['acesso']=$usuario->acesso;
		}
		
		//echo $user_info['login'];
		//die;

		
	return $informacoes;
		
	}
	*/
}
