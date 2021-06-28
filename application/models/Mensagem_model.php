<?php

class Mensagem_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function buscarMensagens(){
		return $this->db->get('contacto_mensagem')->result();
	}

	function buscarMensagensDash(){
		$this->db->limit(5);
		return $this->db->get('contacto_mensagem')->result();
	}

	function save(){
		$arr['nome'] = $this->input->post('nome');
		$arr['email'] = $this->input->post('email');
		$arr['telefone'] = $this->input->post('telefone');
		$arr['assunto'] = $this->input->post('assunto');
		$arr['mensagem'] = $this->input->post('mensagem');

		$this->db->insert('contacto_mensagem', $arr);
	}

}
