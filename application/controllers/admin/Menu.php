<?php
require_once APPPATH . 'core/Admin_controller.php';

class Menu extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('menu_model');
	}

	function index(){
		$dados['menus'] = $this->menu_model->listarMenu();
		$dados['titulo'] = 'Menus';
		$this->mTela('menu/menu',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Menu';
		$this->mTela('menu/add',$dados);
	}

	function add_menu_item($id){
		$this->load->model('pagina_model');
		$dados['titulo'] = 'Adicionar Item de Menu';
		$dados['id_menu'] = $id;
		$dados['paginas'] = $this->pagina_model->listarPaginas();
		$this->mTela('menu/add_menu_item',$dados);
	}

	function save_menu_item($id){
		$this->menu_model->saveMenuItem($id);
		redirect(admin_url('menu'));
	}

	function save(){
		$this->menu_model->save();
		redirect(admin_url('menu'));
	}

	function ver($id){
		$dados['itens'] = $this->menu_model->getItens($id);
		$dados['titulo'] = 'Detalhes do menu';
		$this->mTela('menu/ver',$dados);
	}

	function alterar($id){
		$dados['menu'] = $this->menu_model->getById($id);
		$dados['titulo'] = 'Alterar Usuario';
		$this->mTela('usuarios/alterar',$dados);
	}

	function update($id){
		$this->menu_model->update($id);
		redirect(admin_url('media'));
	}

	function delete($id){
		$this->menu_model->delete($id);
		redirect(admin_url('media'));
	}
}
