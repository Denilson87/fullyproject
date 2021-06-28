<?php
require_once APPPATH . 'core/Admin_controller.php';

class Configuracoes extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('configuracoes_model');
	}

	public function index(){
		$data['titulo'] = 'Configurações';
		$this->mTela('configuracoes/configuracoes',$data);
	}

	function tipos(){
		$data['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$data['titulo'] = 'Configurar Tipos';
		$this->mTela('configuracoes/tipos',$data);
	}

	function add_tipo(){
		$data['titulo'] = 'Adicionar Tipo';
		$this->mTela('configuracoes/add_tipo',$data);
	}

	function save_tipo(){
		$this->configuracoes_model->saveTipo();
		redirect(admin_url('configuracoes/tipos'));
	}

	function categorias(){
		$data['categorias'] = $this->configuracoes_model->listarCategorias();
		$data['titulo'] = 'Configurar Categorias';
		$this->mTela('configuracoes/categorias',$data);
	}

	function add_categoria(){
		$data['titulo'] = 'Adicionar Categoria';
		$this->mTela('configuracoes/add_categoria',$data);
	}

	function save_categoria(){
		$this->configuracoes_model->saveCategoria();
		redirect(admin_url('configuracoes/categorias'));
	}
}
