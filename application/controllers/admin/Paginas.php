<?php
require_once APPPATH . 'core/Admin_controller.php';

class Paginas extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('pagina_model');
		$this->load->model('media_model');
		$this->load->model('widget_model');
		$this->load->model('configuracoes_model');
	}

	function index(){
		$dados['paginas'] = $this->pagina_model->listarpaginas();
		$dados['titulo'] = 'Paginas';
		$this->mTela('paginas/paginas',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Pagina';
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$this->mTela('paginas/add',$dados);
	}

	function add_page(){
		$dados['titulo'] = 'Adicionar Pagina';
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$this->mTela('paginas/add_page',$dados);
	}

	function save(){
		$this->pagina_model->save();
		redirect(admin_url('paginas'));
	}

	function ver($id){
		$dados['pagina'] = $this->pagina_model->getById($id);
		$dados['titulo'] = 'Detalhes da pagina';
		$this->mTela('paginas/ver',$dados);
	}

	function alterar($id){
		$dados['pagina'] = $this->pagina_model->getById($id);
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$dados['titulo'] = 'Alterar Pagina';
		$this->mTela('paginas/alterar',$dados);
	}

	function update($id){
		$this->pagina_model->update($id);
		redirect(admin_url('paginas'));
	}

	function delete($id){
		$this->pagina_model->delete($id);
		redirect(admin_url('paginas'));
	}
}
