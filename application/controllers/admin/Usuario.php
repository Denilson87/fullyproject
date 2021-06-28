<?php
require_once APPPATH . 'core/Admin_controller.php';

class Usuario extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}

		/*
         * Impedir que se grave a pagina de Login na cache
         */
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}

	function index(){
		$dados['usuarios'] = $this->usuario_model->listarUsuarios();
		$dados['titulo'] = 'Lista de Usuarios';
		$this->mTela('usuarios/usuarios',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Usuario';
		$this->mTela('usuarios/add',$dados);
	}

	function save(){
		$this->usuario_model->save();
		redirect(admin_url('usuario'));
	}

	function ver($id){
		$dados['usuario'] = $this->usuario_model->getById($id);
		$dados['titulo'] = 'Detalhes do Usuario';
		$this->mTela('usuarios/ver',$dados);
	}

	function alterar($id){
		$dados['usuario'] = $this->usuario_model->getById($id);
		$dados['titulo'] = 'Alterar Usuario';
		$this->mTela('usuarios/alterar',$dados);
	}

	function update($id){
		$this->usuario_model->update($id);
		redirect(admin_url('usuario'));
	}

	function delete($id){
		$this->usuario_model->delete($id);
		redirect(admin_url('usuario'));
	}
}
