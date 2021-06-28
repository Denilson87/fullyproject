<?php
require_once APPPATH . 'core/Admin_controller.php';

class Slide extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('slide_model');
		$this->load->model('media_model');
	}

	function index(){
		$dados['slides'] = $this->slide_model->listarSlides();
		$dados['titulo'] = 'Slides';
		$this->mTela('slide',$dados);
	}

	function add($id){
		$dados['titulo'] = 'Adicionar Slide';
		$dados['id_slider'] = $id;
		$dados['medias'] = $this->media_model->listarMedia();
		$this->mTela('slide/add',$dados);
	}

	function save($id){
		$this->slide_model->save($id);
		redirect(admin_url('slider'));
	}

	function ver($id){
		$dados['slide'] = $this->slide_model->getById($id);
		$dados['titulo'] = 'Detalhes do Slide';
		$this->mTela('slide/ver',$dados);
	}

	function alterar($id){
		$dados['slide'] = $this->slide_model->getById($id);
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['titulo'] = 'Alterar Slide';
		$this->mTela('slide/alterar',$dados);
	}

	function update($id){
		$this->slide_model->update($id);
		redirect(admin_url('slider'));
	}

	function delete($id){
		$this->slide_model->delete($id);
		redirect(admin_url('slider'));
	}
}
