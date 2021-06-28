<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarPaginas(){
		return $this->db->get('portfolio')->result();
	}

	function pagina(){
		return $this->db->get('portfolio')->row();
	}

	function getById($id){
		$this->db->select('portfolio.id, portfolio.titulo, portfolio.corpo, portfolio.introducao, portfolio.categoria, portfolio.tipo, media.id_media, media.foto');
		$this->db->from('portfolio');
		$this->db->join('media', 'portfolio.id_media = media.id_media');
		$this->db->where(array('id'=>$id));
		return $this->db->get()->row();
	}

	function getByType($tipo){
		$this->db->select('portfolio.id, portfolio.titulo, portfolio.corpo, portfolio.introducao, portfolio.categoria, portfolio.tipo, media.id_media, media.foto');
		$this->db->from('portfolio');
		$this->db->join('media', 'portfolio.id_media = media.id_media');
		$this->db->where(array('tipo'=>$tipo));
		return $this->db->get()->row();
	}

	function getByTypeWithCategory($tipo){
		$this->db->select('portfolio.id, portfolio.titulo, portfolio.corpo, portfolio.introducao, portfolio.categoria, portfolio.tipo, media.id_media, media.foto, categorias.descricao');
		$this->db->from('portfolio');
		$this->db->join('media', 'portfolio.id_media = media.id_media');
		$this->db->join('categorias', 'portfolio.categoria = categorias.designacao');
		$this->db->where(array('portfolio.tipo'=>$tipo));
		return $this->db->get()->row();
	}

	function getByAlias($alias){
		return $this->db->get_where('portfolio', array('alias'=>$alias))->row();
	}

	function getManyByType($tipo){
		$this->db->select('portfolio.id, portfolio.titulo, portfolio.corpo, portfolio.introducao, portfolio.categoria, portfolio.tipo, media.id_media, media.foto');
		$this->db->from('portfolio');
		$this->db->join('media', 'portfolio.id_media = media.id_media');
		$this->db->where(array('tipo'=>$tipo));
		return $this->db->get()->result();
	}

	function save(){
		$arr['tipo'] = $this->input->post('tipo');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['categoria'] = $this->input->post('categoria');
		$arr['introducao'] = $this->input->post('introducao');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['id_media'] = $this->input->post('imagem_destaque');
		$this->db->insert('portfolio', $arr);
	}

	function update($id){
		$arr['tipo'] = $this->input->post('tipo');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['categoria'] = $this->input->post('categoria');
		$arr['introducao'] = $this->input->post('introducao');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['id_media'] = $this->input->post('imagem_destaque');
		$this->db->where(array('id'=>$id));
		$this->db->update('portfolio', $arr);
	}

	function delete($id){
		$this->db->where(array('id'=>$id));
		$this->db->delete('portfolio');
	}

}
