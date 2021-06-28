<?php
require_once APPPATH . 'core/Admin_controller.php';

class Informacao_historica extends Admin_Controller
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
//		$dados['info'] = $this->slide_model->listarSlides();
		$dados['titulo'] = 'Informação Histórica';
		$this->mTela('sobre_nos/sobre_nos',$dados);
	}

	function add($id){
		$dados['titulo'] = 'Adicionar Slide';
		$dados['id_slider'] = $id;
		$dados['medias'] = $this->media_model->listarMedia();
		$this->mTela('sobre_nos/add',$dados);
	}

	function save($id){
		$this->slide_model->save($id);
		redirect(admin_url('informacao_historica'));
	}

	function ver($id){
		$dados['slide'] = $this->slide_model->getById($id);
		$dados['titulo'] = 'Detalhes do Slide';
		$this->mTela('sobre_nos/ver',$dados);
	}

	function alterar($id){
		$dados['slide'] = $this->slide_model->getById($id);
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['titulo'] = 'Alterar Slide';
		$this->mTela('sobre_nos/alterar',$dados);
	}

	function update($id){
		$this->slide_model->update($id);
		redirect(admin_url('informacao_historica'));
	}

	function delete($id){
		$this->slide_model->delete($id);
		redirect(admin_url('informacao_historica'));
	}
}
