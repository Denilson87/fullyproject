<?php
require_once APPPATH . 'core/Admin_controller.php';

class Contactos extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('contactos_model');
	}

	function index(){
//		$dados['contactos'] = $this->contactos_model->listarContactos();
//		$dados['titulo'] = 'Lista de Contactos';
//		$this->mTela('contactos/contactos',$dados);
		$dados['contacto'] = $this->contactos_model->getById(1);
		$dados['titulo'] = 'Detalhes do Contacto';
		$this->mTela('contactos/ver',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Contacto';
		$this->mTela('contactos/add',$dados);
	}

	function save(){
		$this->contactos_model->save();
		redirect(admin_url('contactos'));
	}

	function ver($id){
		$dados['contacto'] = $this->contactos_model->getById($id);
		$dados['titulo'] = 'Detalhes do Contacto';
		$this->mTela('contactos/ver',$dados);
	}

	function alterar($id){
		$dados['contacto'] = $this->contactos_model->getById($id);
		$dados['titulo'] = 'Alterar Contacto';
		$this->mTela('contactos/alterar',$dados);
	}

	function update($id){
		$this->contactos_model->update($id);
		redirect(admin_url('contactos'));
	}

	function delete($id){
		$this->contactos_model->delete($id);
		redirect(admin_url('contactos'));
	}
}
