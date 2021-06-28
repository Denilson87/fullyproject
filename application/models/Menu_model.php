<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarMenu(){
		return $this->db->get('menu')->result();
	}

	function getById($id){
		return $this->db->get_where('menu', array('id_menu'=>$id))->row();
	}

	function getItens($id){
		$this->db->select('item_menu.id_item_menu, item_menu.titulo, item_menu.link, pagina.titulo as pagina');
		$this->db->from('item_menu');
		$this->db->join('pagina', 'item_menu.id_pagina = pagina.id_pagina', 'left');
		$this->db->where(array('id_menu' => $id));
		$query = $this->db->get();
		return $query->result();
	}

	function save(){
		$arr['designacao'] = $this->input->post('designacao');
		$arr['descricao'] = $this->input->post('descricao');
		$this->db->insert('menu', $arr);
	}

	function saveMenuItem($id){
		$arr['titulo'] = $this->input->post('titulo');
		$arr['id_menu'] = $id;
		if($this->input->post('link') != ""){
			$arr['link'] = $this->input->post('link');
		}
		if($this->input->post('id_pagina') != ""){
			$arr['id_pagina'] = $this->input->post('id_pagina');
		}
		$this->db->insert('item_menu', $arr);
	}

	function update($id){
		$arr['designacao'] = $this->input->post('designacao');
		$arr['descricao'] = $this->input->post('descricao');

		$this->db->where(array('id_menu'=>$id));
		$this->db->update('menu', $arr);
	}

	function delete($id){
		$this->db->where(array('id_menu'=>$id));
		$this->db->delete('menu');
	}

}
