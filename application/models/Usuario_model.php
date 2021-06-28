<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function autenticar($usuario, $senha) {
		$this->db->where(array('usuario'=>$usuario));
        $this->db->where(array('senha'=> $senha));
        $query = $this->db->get('usuario')->row();
        if ($query->estado == 1){
			return $query;
		}else{
        	return null;
		}
    }

	function listarUsuarios(){
		return $this->db->get('usuario')->result();
	}

	function usuario(){
		return $this->db->get('usuario')->row();
	}

	function getById($id){
		$this->db->where('id_usuario', $id);
		$query = $this->db->get('usuario');
		return $query->row_array();
	}

	function save(){
		$arr['nome'] = $this->input->post('nome');
		$arr['usuario'] = $this->input->post('usuario');
		$arr['senha'] = sha1($this->input->post('senha'));
		$arr['email'] = $this->input->post('email');
		$arr['estado'] = $this->input->post('estado');
		$arr['foto'] = $this->input->post('imagem');
		$this->db->insert('usuario', $arr);
	}

	function update($id){
		$arr['nome'] = $this->input->post('nome');
		$arr['usuario'] = $this->input->post('usuario');
		$arr['senha'] = sha1($this->input->post('senha'));
		$arr['email'] = $this->input->post('email');
		$arr['estado'] = $this->input->post('estado');
		$arr['foto'] = $this->input->post('imagem');

		$this->db->where(array('id_usuario'=>$id));
		$this->db->update('usuario', $arr);
	}

	function delete($id){
		$this->db->where(array('id_usuario'=>$id));
		$this->db->delete('usuario');
	}

}
