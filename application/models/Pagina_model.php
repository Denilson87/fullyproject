<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarPaginas(){
		return $this->db->get('pagina')->result();
	}

	function pagina(){
		return $this->db->get('pagina')->row();
	}

	function getById($id){
		return $this->db->get_where('pagina', array('id_pagina'=>$id))->row();
	}

	function getByType($tipo){
		return $this->db->get_where('pagina', array('tipo'=>$tipo))->row();
	}

	function getByAlias($alias){
		return $this->db->get_where('pagina', array('alias'=>$alias))->row();
	}

	function getManyByType($tipo){
		return $this->db->get_where('pagina', array('tipo'=>$tipo))->result();
	}

	function save(){
		$arr['tipo'] = $this->input->post('tipo');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['subtitulo'] = $this->input->post('subtitulo');
		$arr['introducao'] = $this->input->post('introducao');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['sidebar'] = $this->input->post('sidebar');
		$arr['imagem_destaque'] = $this->input->post('imagem_destaque');
		$this->db->insert('pagina', $arr);
	}

	function update($id){
		$arr['tipo'] = $this->input->post('tipo');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['subtitulo'] = $this->input->post('subtitulo');
		$arr['introducao'] = $this->input->post('introducao');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['sidebar'] = $this->input->post('sidebar');
		$arr['imagem_destaque'] = $this->input->post('imagem_destaque');
		$this->db->where(array('id_pagina'=>$id));
		$this->db->update('pagina', $arr);
	}

	function delete($id){
		$this->db->where(array('id_pagina'=>$id));
		$this->db->delete('pagina');
	}

}
