<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarSlides(){
		return $this->db->get('slide')->result();
	}

	function totalSlides(){
		return $this->db->count_all_results('slide');
	}

	function getById($id){
		$this->db->select('slide.id_slide, slide.descricao, slide.introducao, slide.titulo, media.id_media, media.designacao, media.foto');
		$this->db->from('slide');
		$this->db->join('media', 'media.id_media = slide.id_media');
		$this->db->where(array('slide.id_slide' => $id));
		$query = $this->db->get();
		return $query->row();
	}

	function save($id){
		$arr['descricao'] = $this->input->post('descricao');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['introducao'] = $this->input->post('introducao');
		$arr['id_media'] = $this->input->post('id_media');
		$arr['id_slider'] = $id;

		if (isset($_FILES['imagem']['name'])){
			$this->load->library('upload');
			$config['upload_path'] = APPPATH.'../media/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = date('YmdHms').'_'.rand(1,99999999);
//			$config['max_size'] = 100;
//			$config['max_width'] = 1024;
//			$config['max_height'] = 768;
			$this->upload->initialize($config);

			if ($this->upload->do_upload('imagem')){
				$uploaded = $this->upload->data();
				//pegar o filename do ficheiro carregado
				$arr['foto'] = 'img/'.$uploaded['file_name'];
			}
		}
//		var_dump($arr);
//		die();
		$this->db->insert('slide', $arr);
	}

	function update($id){
		$arr['descricao'] = $this->input->post('descricao');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['introducao'] = $this->input->post('introducao');
		$arr['id_media'] = $this->input->post('id_media');

		if (isset($_FILES['imagem']['name'])){
			$this->load->library('upload');
			$config['upload_path'] = APPPATH.'../media/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = date('YmdHms').'_'.rand(1,99999999);
//			$config['max_size'] = 100;
//			$config['max_width'] = 1024;
//			$config['max_height'] = 768;
			$this->upload->initialize($config);

			if ($this->upload->do_upload('imagem')){
				$uploaded = $this->upload->data();
				//pegar o filename do ficheiro carregado
				$arr['foto'] = 'img/'.$uploaded['file_name'];
			}
		}

		$this->db->where(array('id_slide'=>$id));
		$this->db->update('slide', $arr);
	}

	function delete($id){
		$this->db->where(array('id_slide'=>$id));
		$this->db->delete('slide');
	}

}
