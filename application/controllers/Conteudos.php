<?php

/**
* @author Ramires Oliveira
*/
class Conteudos extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function cadastro_conteudo()
	{
		$data['conteudo'] = "<b>Conteudo teste</b>";
		$this->load->view('conteudos/cadastro_conteudo',$data);
	}

	public function salvar_conteudo()
	{
		$conteudo = $this->input->post('conteudo');
		echo $conteudo;
	}

}
