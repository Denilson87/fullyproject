<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeria_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	//	GALERIA_ALBUM
	function getAllAlbuns()
	{
		$this->db->select('galeria_album.id_album, galeria_album.descricao, media.designacao, media.foto');
		$this->db->from('galeria_album');
		$this->db->join('media', 'media.id_media = galeria_album.id_media');
		$query = $this->db->get();
		return $query->result();
	}

	function getAlbumById($id)
	{
		return $this->get_where('galeria_album', array('id_album' => $id))->row();
	}

	function getAlbumTitle($id)
	{
		$this->db->select('*');
		$this->db->from('galeria_album');
		$this->db->where(array('id_album' => $id));
		$query = $this->db->get();
		return $query->row()->descricao;
	}

	function saveAlbum()
	{
		$arr['descricao'] = $this->input->post('descricao');
		$arr['id_media'] = $this->input->post('id_media');
		$this->db->insert('galeria_album', $arr);
	}

	function updateAlbum($id)
	{
		$arr['descricao'] = $this->input->post('descricao');
		$arr['id_media'] = $this->input->post('id_media');

		$this->db->where(array('id_album' => $id));
		$this->db->update('galeria_album', $arr);
	}

	function deleteAlbum($id)
	{
		$this->db->where(array('id_album' => $id));
		$this->db->delete('galeria_album');
	}

	//	GALERIA_PHOTO
	function getAllAlbumPhotos($id)
	{
		$this->db->select('galeria_photo.id_album, galeria_photo.id_photo, galeria_photo.descricao, galeria_photo.titulo, media.designacao, media.foto, galeria_album.descricao as album_titulo');
		$this->db->from('galeria_photo');
		$this->db->join('media', 'media.id_media = galeria_photo.id_media');
		$this->db->join('galeria_album', 'galeria_album.id_album = galeria_photo.id_album');
		$this->db->where(array('galeria_photo.id_album' => $id));
		$query = $this->db->get();
		return $query->result();
	}

	function getPhotoById($id)
	{
		return $this->get_where('galeria_photo', array('id_photo' => $id))->row();
	}

	function totalPhotos($id)
	{
		$this->db->select('*');
		$this->db->from('galeria_photo');
		$this->db->where(array('id_album' => $id));
		$query = $this->db->get();

		return count($query->result());
	}

	function savePhoto()
	{
		$arr['titulo'] = $this->input->post('titulo');
		$arr['descricao'] = $this->input->post('descricao');
		$arr['id_media'] = $this->input->post('id_media');
		$arr['id_album'] = $this->input->post('id_album');
		$this->db->insert('galeria_photo', $arr);
	}

	function updatePhoto($id)
	{
		$arr['titulo'] = $this->input->post('titulo');
		$arr['descricao'] = $this->input->post('descricao');
		$arr['id_media'] = $this->input->post('id_media');
		$arr['id_album'] = $this->input->post('id_album');

		$this->db->where(array('id_photo' => $id));
		$this->db->update('galeria_photo', $arr);
	}

	function deletePhoto($id)
	{
		$this->db->where(array('id_photo' => $id));
		$this->db->delete('galeria_photo');
	}

	//	GALERIA_VIDEO
	function getAllVideos()
	{
		return $this->db->get('galeria_video')->result();
	}

	function getVideoById($id)
	{
		$this->db->select('galeria_video.id_video, galeria_video.id_media, galeria_video.descricao, galeria_video.titulo, galeria_video.link_video, media.foto, media.designacao, galeria_video.tipo');
		$this->db->from('galeria_video');
		$this->db->join('media', 'media.id_media = galeria_video.id_media');
		$this->db->where(array('galeria_video.id_video' => $id));
		$query = $this->db->get();
		return $query->row();
	}

	function getVideos()
	{
		$this->db->select('galeria_video.id_video, galeria_video.id_media, galeria_video.descricao, galeria_video.titulo, galeria_video.link_video, media.foto, media.designacao, galeria_video.tipo');
		$this->db->from('galeria_video');
		$this->db->join('media', 'media.id_media = galeria_video.id_media');
		$query = $this->db->get();
		return $query->result();
	}

	function saveVideo()
	{
		$arr['tipo'] = $this->input->post('tipo');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['descricao'] = $this->input->post('descricao');
		$arr['id_media'] = $this->input->post('id_media');
		$arr['id_video'] = $this->input->post('id_video');
		$arr['link_video'] = $this->input->post('link_video');
		$this->db->insert('galeria_video', $arr);
	}

	function updateVideo($id)
	{
		$arr['tipo'] = $this->input->post('tipo');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['descricao'] = $this->input->post('descricao');
		$arr['id_media'] = $this->input->post('id_media');
		$arr['id_video'] = $this->input->post('id_video');
		$arr['link_video'] = $this->input->post('link_video');

		$this->db->where(array('id_video' => $id));
		$this->db->update('galeria_video', $arr);
	}

	function deleteVideo($id)
	{
		$this->db->where(array('id_video' => $id));
		$this->db->delete('galeria_video');
	}

}
