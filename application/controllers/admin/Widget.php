<?php
require_once APPPATH . 'core/Admin_controller.php';

class Widget extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('widget_model');
		$this->load->model('menu_model');
		$this->load->model('configuracoes_model');
	}

	function index(){
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$dados['titulo'] = 'Widgets';
		$this->mTela('widget/widget',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Widget';
		$dados['menus'] = $this->menu_model->listarMenu();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('widget');
		$dados['contactos'] = $this->configuracoes_model->listarContactos();
		$this->mTela('widget/add',$dados);
	}

	function save(){
		$this->widget_model->save();
		redirect(admin_url('widget'));
	}

	function ver($id){
		$dados['widgets'] = $this->widget_model->getById($id);
		$dados['titulo'] = 'Detalhes do Widget';
		$this->mTela('widget/ver',$dados);
	}

	function alterar($id){
		$dados['widget'] = $this->widget_model->getById($id);
		$dados['titulo'] = 'Alterar Widget';
		$this->mTela('widget/alterar',$dados);
	}

	function update($id){
		$this->widget_model->update($id);
		redirect(admin_url('widget'));
	}

	function delete($id){
		$this->widget_model->delete($id);
		redirect(admin_url('widget'));
	}
}
