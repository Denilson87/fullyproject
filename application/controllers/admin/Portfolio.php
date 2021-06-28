<?php
require_once APPPATH . 'core/Admin_controller.php';

class Portfolio extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('portfolio_model');
		$this->load->model('media_model');
		$this->load->model('widget_model');
		$this->load->model('configuracoes_model');
	}

	function index(){
		$dados['paginas'] = $this->portfolio_model->listarpaginas();
		$dados['titulo'] = 'Portfolio';
		$this->mTela('portfolio/portfolio',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Portfolio';
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['categorias'] = $this->configuracoes_model->listarCategorias();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$this->mTela('portfolio/add',$dados);
	}

	function save(){
		$this->portfolio_model->save();
		redirect(admin_url('portfolio'));
	}

	function ver($id){
		$dados['pagina'] = $this->portfolio_model->getById($id);
		$dados['titulo'] = 'Detalhes da pagina';
		$this->mTela('portfolio/ver',$dados);
	}

	function alterar($id){
		$dados['pagina'] = $this->portfolio_model->getById($id);
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['categorias'] = $this->configuracoes_model->listarCategorias();
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$dados['titulo'] = 'Alterar Pagina';
		$this->mTela('portfolio/alterar',$dados);
	}

	function update($id){
		$this->portfolio_model->update($id);
		redirect(admin_url('portfolio'));
	}

	function delete($id){
		$this->portfolio_model->delete($id);
		redirect(admin_url('portfolio'));
	}
}
