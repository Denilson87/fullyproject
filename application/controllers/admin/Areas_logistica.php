<?php
require_once APPPATH . 'core/Admin_controller.php';

class Areas_logistica extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('pagina_model');
	}

	function index(){
		$dados['paginas'] = $this->pagina_model->getManyByType('area_logistica');
		$dados['titulo'] = 'Áreas de Logística';
		$this->mTela('areas_logistica/areas_logistica',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Área de Logística';
		$this->mTela('Paginas/add',$dados);
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
