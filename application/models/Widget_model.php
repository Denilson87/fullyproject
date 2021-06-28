<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widget_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarWidgets(){
		return $this->db->get('widget')->result();
	}

	function getById($id){
		return $this->db->get_where('widget', array('id_widget'=>$id))->row();
	}

	function getByTypeAndId($tipo, $id){
		if ($tipo == 'social'){
			$this->db->select('widget.id_widget, widget.titulo, widget.corpo, widget.tipo, 
			social.facebook, social.instagram, social.whatsapp, social.twiter, social.google_plus,
			 social.skype, social.linkedin, social.pinterest');
			$this->db->from('widget');
			$this->db->join('social', 'widget.id_associado = social.id_social');
		}
		else if($tipo == 'endereco'){
			$this->db->select('widget.id_widget, widget.titulo, widget.corpo, widget.tipo, 
			endereco.avenida_rua, endereco.numero, endereco.outro, endereco.provincia');
			$this->db->from('widget');
			$this->db->join('endereco', 'widget.id_associado = endereco.id_endereco');
		}
		else if($tipo == 'mapa'){
			$this->db->select('widget.id_widget, widget.titulo, widget.corpo, widget.tipo, 
			mapa.latitude, mapa.longitude');
			$this->db->from('widget');
			$this->db->join('mapa', 'widget.id_associado = mapa.id_mapa');
		}
		else if($tipo == 'menu'){
			$this->db->select('widget.id_widget, widget.titulo, widget.corpo, widget.tipo, 
			item_menu.titulo as titulo_menu, item_menu.link, item_menu.id_pagina');
			$this->db->from('widget');
			$this->db->join('item_menu', 'widget.id_associado = item_menu.id_menu');
		}
		else if($tipo == 'contacto'){
			$this->db->select('widget.id_widget, widget.titulo, widget.corpo, widget.tipo, 
			contacto.telefone, contacto.fax, contacto.email');
			$this->db->from('widget');
			$this->db->join('contacto', 'widget.id_associado = contacto.id_contacto');
		}

		$this->db->where(array('id_widget' => $id));
		$query = $this->db->get();
		return $query->result();
	}

	function save(){
		$arr['titulo'] = $this->input->post('titulo');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['tipo'] = $this->input->post('tipo');

		//blocos de if para o tipo

		if ($arr['tipo'] == 'endereco'){
			$array['avenida_rua'] = $this->input->post('avenida_rua');
			$array['numero'] = $this->input->post('numero');
			$array['outro'] = $this->input->post('outro');
			$array['provincia'] = $this->input->post('provincia');
			$this->db->insert('endereco', $array);
			$id = $this->db->insert_id();
		}
		else if($arr['tipo'] == 'contacto'){
			$id = $this->input->post('id_contacto');
		}
		else if($arr['tipo'] == 'menu'){
			$id = $this->input->post('id_menu');
		}
		else if($arr['tipo'] == 'mapa'){
			$array['latitude'] = $this->input->post('latitude');
			$array['longitude'] = $this->input->post('longitude');
			$this->db->insert('mapa', $array);
			$id = $this->db->insert_id();
		}
		else if($arr['tipo'] == 'social'){
			$array['facebook'] = $this->input->post('facebook');
			$array['instagram'] = $this->input->post('instagram');
			$array['whatsapp'] = $this->input->post('whatsapp');
			$array['twiter'] = $this->input->post('twiter');
			$array['google_plus'] = $this->input->post('google_plus');
			$array['skype'] = $this->input->post('skype');
			$array['linkedin'] = $this->input->post('linkedin');
			$array['pinterest'] = $this->input->post('pinterest');
			$this->db->insert('social', $array);
			$id = $this->db->insert_id();
		}
		else {
			echo 'Algo ocorreu de errado... Volte e tente novamente';
		}

		$arr['id_associado'] = $id;
		$this->db->insert('widget', $arr);
	}

	function update($id){
		$arr['titulo'] = $this->input->post('titulo');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['tipo'] = $this->input->post('tipo');

		$this->db->where(array('id_widget'=>$id));
		$this->db->update('widget', $arr);
	}

	function delete($id){
		$this->db->where(array('id_widget'=>$id));
		$this->db->delete('widget');
	}

}
