<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album_item_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarItems($id){
		$this->db->select('galeria_photo.id_album, galeria_photo.id_photo, galeria_photo.descricao, galeria_photo.titulo, media.designacao, media.foto, galeria_album.descricao as album_titulo');
		$this->db->from('galeria_photo');
		$this->db->join('media', 'media.id_media = galeria_photo.id_media');
		$this->db->join('galeria_album', 'galeria_album.id_album = galeria_photo.id_album');
		$this->db->where(array('galeria_photo.id_album' => $id));
		$query = $this->db->get();
		return $query->result();
	}

	function listarItemsPeloId($id){
		return $this->db->get('galeria_photo')->result();
	}

	function getItemsByType($tipo){
		return $this->db->get_where('galeria_photo', array('tipo'=>$tipo))->result();
	}

	function totalItems(){
		return $this->db->count_all_results('galeria_photo');
	}

	function getById($id){
		return $this->db->get_where('galeria_photo', array('id_album_item'=>$id))->row();
	}

	function save($id){
		$arr['tipo'] = $this->input->post('tipo');
		$arr['descricao'] = $this->input->post('descricao');
		$arr['id_media'] = $this->input->post('id_media');
		$arr['id_album'] = $id;

		$this->db->insert('album_item', $arr);
	}

	function update($id){
		$arr['tipo'] = $this->input->post('tipo');
		$arr['descricao'] = $this->input->post('descricao');
		$arr['id_media'] = $this->input->post('id_media');

		$this->db->where(array('id_album_item'=>$id));
		$this->db->update('galeria_photo', $arr);
	}

	function delete($id){
		$this->db->where(array('id_album_item'=>$id));
		$this->db->delete('galeria_photo');
	}

}
