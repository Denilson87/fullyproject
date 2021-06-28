<?php
require_once APPPATH . 'core/Admin_controller.php';

class Seccao extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('media_model');
	}

	function index(){
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['titulo'] = 'Media';
		$this->mTela('media',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Media';
		$this->mTela('Media/add',$dados);
	}

	function save(){
		$this->media_model->save();
		redirect(admin_url('media'));
	}

	function ver($id){
		$dados['usuario'] = $this->media_model->getById($id);
		$dados['titulo'] = 'Detalhes do Usuario';
		$this->mTela('usuarios/ver',$dados);
	}

	function alterar($id){
		$dados['usuario'] = $this->media_model->getById($id);
		$dados['titulo'] = 'Alterar Usuario';
		$this->mTela('usuarios/alterar',$dados);
	}

	function update($id){
		$this->media_model->update($id);
		redirect(admin_url('media'));
	}

	function delete($id){
		$this->media_model->delete($id);
		redirect(admin_url('media'));
	}
}
