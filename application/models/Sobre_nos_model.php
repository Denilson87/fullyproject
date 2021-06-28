<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre_nos_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarInformacaoHistorica(){
		return $this->db->get('info_historica')->result();
	}

	function getAbout(){
		return $this->db->get('sobre_nos')->row();
	}

	function totalSlides(){
		return $this->db->count_all_results('slide');
	}

	function getById(){
		$this->db->select('sobre_nos.titulo, sobre_nos.corpo, sobre_nos.id, sobre_nos.missao, sobre_nos.visao, 
							sobre_nos.valores, media.id_media as id_media, media.foto');
		$this->db->from('sobre_nos');
		$this->db->join('media', 'sobre_nos.id_media = media.id_media');
		$query = $this->db->get();

		return $query->row();
	}

	function buscarInfoHistoricaPeloId($id){
		return $this->db->get_where('info_historica', array('id'=>$id))->row();
	}

	function informacao_historica_save(){
		$arr['descricao'] = $this->input->post('descricao');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['data'] = $this->input->post('data');

		$this->db->insert('info_historica', $arr);
	}

	function informacao_historica_update($id){
		$arr['descricao'] = $this->input->post('descricao');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['data'] = $this->input->post('data');

		$this->db->where(array('id'=>$id));
		$this->db->update('info_historica', $arr);
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
			$this->upload->initialize($config);

			if ($this->upload->do_upload('imagem')){
				$uploaded = $this->upload->data();
				//pegar o filename do ficheiro carregado
				$arr['foto'] = 'img/'.$uploaded['file_name'];
			}
		}
		$this->db->insert('slide', $arr);
	}

	function update($id){
		$arr['titulo'] = $this->input->post('titulo');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['missao'] = $this->input->post('missao');
		$arr['visao'] = $this->input->post('visao');
		$arr['valores'] = $this->input->post('valores');
		$arr['id_media'] = $this->input->post('id_media');

		$this->db->where(array('id'=>$id));
		$this->db->update('sobre_nos', $arr);
	}

	function delete($id){
		$this->db->where(array('id_slide'=>$id));
		$this->db->delete('slide');
	}

	function informacao_historica_delete($id){
		$this->db->where(array('id'=>$id));
		$this->db->delete('info_historica');
	}

	function estrutura_organica_save(){
		$arr['titulo'] = $this->input->post('titulo');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['id_media'] = $this->input->post('imagem_destaque');
		$this->db->insert('estrutura_organica', $arr);
	}

	function estrutura_organica_update($id){
		$arr['titulo'] = $this->input->post('titulo');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['id_media'] = $this->input->post('imagem_destaque');
		$this->db->where(array('id'=>$id));
		$this->db->update('estrutura_organica', $arr);
	}

	function buscarEstruturaOrganica(){
		$this->db->select('estrutura_organica.id, estrutura_organica.titulo, estrutura_organica.corpo, media.id_media, media.foto');
		$this->db->from('estrutura_organica');
		$this->db->join('media', 'estrutura_organica.id_media = media.id_media');
		$query = $this->db->get();

		return $query->row();

//		return $this->db->get('estrutura_organica')->row();
	}

	function buscarEstruturaOrganicaPeloId($id){
		$this->db->select('estrutura_organica.id, estrutura_organica.titulo, estrutura_organica.corpo, media.id_media, media.foto');
		$this->db->from('estrutura_organica');
		$this->db->join('media', 'estrutura_organica.id_media = media.id_media');
		$this->db->where(array('id'=>$id));
		return $this->db->get()->row();
	}
}
