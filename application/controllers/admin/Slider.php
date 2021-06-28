<?php
require_once APPPATH . 'core/Admin_controller.php';

class Slider extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('slider_model');
		$this->load->model('slide_model');
	}

	function index(){
		$dados['sliders'] = $this->slider_model->listarSliders();
		$dados['total_slides'] = $this->slide_model->totalSlides();
		$dados['titulo'] = 'Slider';
		$this->mTela('slider/slider',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Slider';
		$this->mTela('slider/add',$dados);
	}

	function save(){
		$this->slider_model->save();
		redirect(admin_url('slider'));
	}

	function ver($id){
		$dados['slider'] = $this->slider_model->getById($id);
		$dados['id_slider'] = $id;
		$dados['titulo'] = 'Detalhes do Slider';
		$this->mTela('slider/ver',$dados);
	}

	function alterar($id){
		$dados['slider'] = $this->slider_model->getById($id);
		$dados['titulo'] = 'Alterar Slider';
		$this->mTela('slider/alterar',$dados);
	}

	function update($id){
		$this->slider_model->update($id);
		redirect(admin_url('slider'));
	}

	function delete($id){
		$this->slider_model->delete($id);
		redirect(admin_url('slider'));
	}
}
