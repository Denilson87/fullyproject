<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarContactos(){
		return $this->db->get('contacto')->result();
	}

	function contacto(){
		return $this->db->get('contacto')->row();
	}

	function getById($id){
		return $this->db->get_where('contacto', array('id_contacto'=>$id))->row();
	}

	function save(){
		$arr['endereco'] = $this->input->post('endereco');
		$arr['caixa_postal'] = $this->input->post('caixa-postal');
		$arr['telefone'] = $this->input->post('telefone');
		$arr['fax'] = $this->input->post('fax');
		$arr['email'] = $this->input->post('email');
		$arr['telefone_sec1'] = $this->input->post('telefone-sec1');
		$arr['telefone_sec2'] = $this->input->post('telefone-sec2');
		$arr['horario_trabalho'] = $this->input->post('horario_trabalho');
		$arr['email_sec'] = $this->input->post('email-sec');
		$arr['imagem'] = $this->input->post('imagem');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['subtitulo'] = $this->input->post('subtitulo');
		$arr['corpo'] = $this->input->post('corpo');

		$this->db->insert('contacto', $arr);
	}

	function update($id){
		$arr['endereco'] = $this->input->post('endereco');
		$arr['caixa_postal'] = $this->input->post('caixa-postal');
		$arr['telefone'] = $this->input->post('telefone');
		$arr['fax'] = $this->input->post('fax');
		$arr['email'] = $this->input->post('email');
		$arr['telefone_sec1'] = $this->input->post('telefone-sec1');
		$arr['telefone_sec2'] = $this->input->post('telefone-sec2');
		$arr['horario_trabalho'] = $this->input->post('horario_trabalho');
		$arr['email_sec'] = $this->input->post('email-sec');
		$arr['imagem'] = $this->input->post('imagem');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['subtitulo'] = $this->input->post('subtitulo');
		$arr['corpo'] = $this->input->post('corpo');

		$this->db->where(array('id_contacto'=>$id));
		$this->db->update('contacto', $arr);
	}

	function delete($id){
		$this->db->where(array('id_contacto'=>$id));
		$this->db->delete('contacto');
	}

}
