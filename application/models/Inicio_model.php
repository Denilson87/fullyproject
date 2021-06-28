<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function listarPaginas(){
		return $this->db->get('pagina')->result();
	}

	function pagina(){
		return $this->db->get('pagina')->row();
	}

	function getById($id){
		return $this->db->get_where('pagina', array('id_pagina'=>$id))->row();
	}

	function save(){
		$arr['tipo'] = $this->input->post('tipo');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['sidebar'] = $this->input->post('sidebar');

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
		$this->db->insert('pagina', $arr);
	}

	function update($id){
		$arr['tipo'] = $this->input->post('tipo');
		$arr['titulo'] = $this->input->post('titulo');
		$arr['corpo'] = $this->input->post('corpo');
		$arr['sidebar'] = $this->input->post('sidebar');

		$this->db->where(array('id_pagina'=>$id));
		$this->db->update('pagina', $arr);
	}

	function delete($id){
		$this->db->where(array('id_pagina'=>$id));
		$this->db->delete('pagina');
	}

}
