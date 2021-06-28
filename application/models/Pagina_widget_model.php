<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina_widget_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarPaginasWidgets(){
		$this->db->select('pagina_widget.id_pagina_widget, pagina.id_pagina, tipo.designacao as tipo, pagina.titulo as pagina, 
							widget.id_widget, widget.titulo as widget');
		$this->db->from('pagina_widget');
		$this->db->join('pagina', 'pagina_widget.tipo = pagina.tipo');
		$this->db->join('widget', 'pagina_widget.id_widget = widget.id_widget');
		$this->db->join('tipo', 'pagina_widget.tipo = tipo.alias');

		$query = $this->db->get();
		return $query->result();
	}

	function getWidgetsByPageId($id){
		$tipo = $this->db->get_where('pagina', array('id_pagina'=>$id))->row()->tipo;
		$this->db->select('pagina_widget.id_pagina_widget, pagina.id_pagina, tipo.designacao as tipo, pagina.titulo as pagina, 
							widget.id_widget, widget.id_associado, widget.tipo, widget.titulo as widget');
		$this->db->from('pagina_widget');
		$this->db->join('pagina', 'pagina_widget.tipo = pagina.tipo');
		$this->db->join('widget', 'pagina_widget.id_widget = widget.id_widget');
		$this->db->join('tipo', 'pagina_widget.tipo = tipo.alias');
		$this->db->where(array('pagina_widget.tipo'=>$tipo));
		$this->db->where(array('pagina.id_pagina'=>$id));
		$query = $this->db->get();

		return $query->result();

//		$results = array();
//
//		foreach ($query->result_array() as $row)
//		{
//			if ($row->tipo == 'menu'){
//				$data = $this->db->get_where('menu', array('id_menu'=>$row->id_associado))->result();
//			}
//			else if ($row->tipo == 'contacto'){
//				$data = $this->db->get_where('contacto', array('id_contacto'=>$row->id_associado))->result();
//			}
//			else if ($row->tipo == 'endereco'){
//				$data = $this->db->get_where('endereco', array('id_endereco'=>$row->id_associado))->result();
//			}
//
//			$results[$row[''.$row->tipo]][] = $data;
//		}
//
//		return $results;
	}

	function media(){
		return $this->db->get('pagina_widget')->row();
	}

	function getById($id){
		return $this->db->get_where('pagina_widget', array('id_pagina'=>$id))->row();
	}

	function save(){
		$arr['id_widget'] = $this->input->post('id_widget');
		if ($this->input->post('id_pagina') != ''){
			$arr['id_pagina'] = $this->input->post('id_pagina');
		}
		if ($this->input->post('tipo') != ''){
			$arr['tipo'] = $this->input->post('tipo');
		}

		$this->db->insert('pagina_widget', $arr);
	}

	function update($id){
		$arr['id_widget'] = $this->input->post('id_widget');
		$arr['id_pagina'] = $this->input->post('id_pagina');
		$arr['tipo'] = $this->input->post('tipo');

		$this->db->where(array('id_pagina_widget '=>$id));
		$this->db->update('pagina_widget', $arr);
	}

	function delete($id){
		$this->db->where(array('id_pagina_widget '=>$id));
		$this->db->delete('pagina_widget');
	}

}
