<?php
require_once APPPATH . 'core/Admin_controller.php';

class Inicio extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('inicio_model');
		$this->load->model('pagina_model');
	}

	function index(){
		$dados['seccoes'] = $this->inicio_model->listarSeccoes();
		$dados['titulo'] = 'Seccoes';
		$this->mTela('paginas/paginas',$dados);
	}

	function mensagem_boas_vindas(){
		$dados['pagina'] = $this->pagina_model->getByType('Mensagem');
		$dados['titulo'] = 'Mensagem de Boas Vindas';
		$this->mTela('inicio/mensagem_boas_vindas',$dados);
	}

	function seccao_noticias(){
		$dados['pagina'] = $this->pagina_model->getByType('Mensagem');
		$dados['titulo'] = 'Secção de Noticias';
		$this->mTela('inicio/seccao_noticias',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Pagina';
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
