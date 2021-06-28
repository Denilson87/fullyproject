<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracoes_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarTipos($tipo){
		return $this->db->get_where('tipo', array('tipo'=>$tipo))->result();
	}

	function listarContactos(){
		return $this->db->get('contacto')->result();
	}

	function saveTipo(){
		$arr['designacao'] = $this->input->post('designacao');
		$arr['descricao'] = $this->input->post('descricao');
		$arr['alias'] = $this->input->post('alias');
		$this->db->insert('tipo', $arr);
	}

	function listarCategorias(){
		return $this->db->get('categorias')->result();
	}

	function listarCategoriasPeloTipo($tipo){
		return $this->db->get_where('categorias', array('tipo'=>$tipo))->result();
	}

	function saveCategoria(){
		$arr['designacao'] = $this->input->post('designacao');
		$arr['descricao'] = $this->input->post('descricao');
		$arr['tipo'] = $this->input->post('tipo');
		$this->db->insert('categorias', $arr);
	}

}
