<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarNoticias(){
		$this->db->select('noticia.id_noticia, noticia.criado_em, pagina.id_pagina, pagina.titulo, pagina.subtitulo, 
							pagina.introducao, pagina.corpo, pagina.imagem_destaque, media.foto, usuario.nome');
		$this->db->from('noticia');
		$this->db->join('pagina', 'noticia.id_pagina = pagina.id_pagina');
		$this->db->join('media', 'noticia.id_media = media.id_media');
		$this->db->join('usuario', 'noticia.id_usuario = usuario.id_usuario');
		$query = $this->db->get();

		return $query->result();
	}

	function buscarNoticia($id){
		$this->db->select('noticia.id_noticia, noticia.criado_em, pagina.id_pagina, pagina.titulo, pagina.subtitulo, 
							pagina.introducao, pagina.corpo, pagina.imagem_destaque, media.foto, usuario.nome');
		$this->db->from('noticia');
		$this->db->join('pagina', 'noticia.id_pagina = pagina.id_pagina');
		$this->db->join('media', 'noticia.id_media = media.id_media');
		$this->db->join('usuario', 'noticia.id_usuario = usuario.id_usuario');
		$this->db->where(array('noticia.id_noticia'=>$id));
		$query = $this->db->get();

		return $query->row();
	}

	function getById($id){
		return $this->db->get_where('noticia', array('id_noticia'=>$id))->row();
	}

	function save(){
		$arr['id_pagina'] = $this->input->post('id_pagina');
		$arr['id_media'] = $this->input->post('id_media');
		$arr['id_usuario'] = $this->session->userdata('usuario')->id_usuario;

		$this->db->insert('noticia', $arr);
	}

	function update($id){
		$arr['id_pagina'] = $this->input->post('id_pagina');
		$arr['id_media'] = $this->input->post('id_media');
		$arr['id_usuario'] = $this->input->post('id_usuario');

		$this->db->where(array('id_noticia'=>$id));
		$this->db->update('noticia', $arr);
	}

	function delete($id){
		$this->db->where(array('id_noticia'=>$id));
		$this->db->delete('noticia');
	}

}
