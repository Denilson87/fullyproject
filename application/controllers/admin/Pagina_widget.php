<?php
require_once APPPATH . 'core/Admin_controller.php';

class Pagina_widget extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('pagina_widget_model');
		$this->load->model('widget_model');
		$this->load->model('pagina_model');
		$this->load->model('configuracoes_model');
	}

	function index(){
		$dados['associacoes'] = $this->pagina_widget_model->listarPaginasWidgets();
		$dados['titulo'] = 'Widgets das Paginas';
		$this->mTela('pagina_widget/pagina_widget',$dados);
	}

	function add(){
		$dados['paginas'] = $this->pagina_model->listarPaginas();
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['titulo'] = 'Associar Widget a Pagina';
		$this->mTela('pagina_widget/add',$dados);
	}

	function add_widgets($id){
		$dados['pagina'] = $this->pagina_model->getById($id);
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$dados['titulo'] = 'Associar Widget a Pagina';
		$this->mTela('pagina_widget/add_widget',$dados);
	}

	function save(){
		$this->pagina_widget_model->save();
		redirect(admin_url('pagina_widget'));
	}

	function ver($id){
		$dados['widgets'] = $this->pagina_widget_model->getById($id);
		$dados['titulo'] = 'Detalhes do Usuario';
		$this->mTela('pagina_widget/ver',$dados);
	}

	function alterar($id){
		$dados['widgets'] = $this->pagina_widget_model->getById($id);
		$dados['titulo'] = 'Alterar Widget das Paginas';
		$this->mTela('usuarios/alterar',$dados);
	}

	function update($id){
		$this->pagina_widget_model->update($id);
		redirect(admin_url('pagina_widget'));
	}

	function delete($id){
		$this->pagina_widget_model->delete($id);
		redirect(admin_url('pagina_widget'));
	}
}
