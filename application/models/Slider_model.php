<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarSliders(){
		return $this->db->get('slider')->result();
	}

	function slider(){
		return $this->db->get('slider')->row();
	}

	function getById($id){
		$this->db->select('slide.id_slide, slide.descricao, slide.introducao, slide.titulo, media.designacao, media.foto');
		$this->db->from('slide');
		$this->db->join('media', 'media.id_media = slide.id_media');
		$this->db->where(array('id_slider' => $id));
		$query = $this->db->get();
		return $query->result();
//		return $this->db->get_where('slider', array('id_slider'=>$id))->row();
	}

	function getSlidesById($id){
		return $this->get_where('slide', array('id_slider'=>$id))->result();
	}

	function save(){
		$arr['designacao'] = $this->input->post('designacao');
		$arr['descricao'] = $this->input->post('descricao');
		$this->db->insert('slider', $arr);
	}

	function update($id){
		$arr['designacao'] = $this->input->post('designacao');
		$arr['descricao'] = $this->input->post('descricao');

		$this->db->where(array('id_slider'=>$id));
		$this->db->update('slider', $arr);
	}

	function delete($id){
		$this->db->where(array('id_media'=>$id));
		$this->db->delete('slider');
	}

}
