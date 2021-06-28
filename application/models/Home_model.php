<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarMedia(){
		return $this->db->get('media')->result();
	}

	function media(){
		return $this->db->get('media')->row();
	}

	function getById($id){
		return $this->db->get_where('media', array('id_media'=>$id))->row();
	}

	function save(){
		$arr['designacao'] = $this->input->post('designacao');
		$arr['id_slide'] = $this->input->post('id_slide');
		$arr['id_usuario'] = $this->input->post('id_usuario');
		$arr['id_noticia'] = $this->input->post('id_noticia');
		$arr['id_blog'] = $this->input->post('id_blog');
		$arr['id_seccao'] = $this->input->post('id_seccao');
		$arr['id_pagina'] = $this->input->post('id_pagina');

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
		$this->db->insert('media', $arr);
	}

	function update($id){
		$arr['foto'] = $this->input->post('foto');
		$arr['designacao'] = $this->input->post('designacao');
		$arr['id_slide'] = $this->input->post('id_slide');
		$arr['id_usuario'] = $this->input->post('id_usuario');
		$arr['id_noticia'] = $this->input->post('id_noticia');
		$arr['id_blog'] = $this->input->post('id_blog');
		$arr['id_seccao'] = $this->input->post('id_seccao');
		$arr['id_pagina'] = $this->input->post('id_pagina');

		$this->db->where(array('id_media'=>$id));
		$this->db->update('media', $arr);
	}

	function delete($id){
		$this->db->where(array('id_media'=>$id));
		$this->db->delete('media');
	}

}
