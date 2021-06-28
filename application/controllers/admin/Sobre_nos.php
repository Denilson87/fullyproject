<?php
require_once APPPATH . 'core/Admin_controller.php';

class Sobre_nos extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('sobre_nos_model');
		$this->load->model('media_model');
		$this->load->model('widget_model');
		$this->load->model('configuracoes_model');
	}

	function index(){
		$dados['sobre'] = $this->sobre_nos_model->getAbout();
		$dados['titulo'] = 'Sobre Nós';
		$this->mTela('sobre_nos/sobre_nos',$dados);
	}

	function add(){
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$dados['titulo'] = 'Sobre Nós';
		$this->mTela('sobre_nos/add',$dados);
	}

	function save(){
		$this->sobre_nos_model->save();
		redirect(admin_url('sobre_nos'));
	}

	function alterar($id){
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$dados['sobre'] = $this->sobre_nos_model->getAbout();
		$dados['titulo'] = 'Alterar Sobre Nós';
		$this->mTela('sobre_nos/alterar',$dados);
	}

	function update($id){
		$this->sobre_nos_model->update($id);
		redirect(admin_url('sobre_nos'));
	}

	function informacao_historica(){
		$dados['info'] = $this->sobre_nos_model->listarInformacaoHistorica();
		$dados['titulo'] = 'Informação Histórica';
		$this->mTela('sobre_nos/informacao_historica',$dados);
	}

	function informacao_historica_add(){
		$dados['titulo'] = 'Adicionar Informação Histórica';
		$this->mTela('sobre_nos/informacao_historica_add',$dados);
	}

	function informacao_historica_ver($id){
		$dados['info'] = $this->sobre_nos_model->buscarInfoHistoricaPeloId($id);
		$dados['titulo'] = 'Detalhes da Informação Histórica';
		$this->mTela('sobre_nos/informacao_historica_ver',$dados);
	}

	function informacao_historica_save(){
		$this->sobre_nos_model->informacao_historica_save();
		redirect(admin_url('sobre_nos/informacao_historica'));
	}

	function informacao_historica_alterar($id){
		$dados['info'] = $this->sobre_nos_model->buscarInfoHistoricaPeloId($id);
		$dados['titulo'] = 'Alterar Informação Histórica';
		$this->mTela('sobre_nos/informacao_historica_alterar',$dados);
	}

	function informacao_historica_update($id){
		$this->sobre_nos_model->informacao_historica_update($id);
		redirect(admin_url('sobre_nos/informacao_historica'));
	}

	function informacao_historica_delete($id){
		$this->sobre_nos_model->informacao_historica_delete($id);
		redirect(admin_url('sobre_nos/informacao_historica'));
	}


	function estrutura_organica(){
		$dados['info'] = $this->sobre_nos_model->buscarEstruturaOrganica();
		$dados['titulo'] = 'Estrutura Orgánica';
		$this->mTela('sobre_nos/estrutura_organica',$dados);
	}

	function estrutura_organica_add(){
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$dados['titulo'] = 'Adicionar Estrutura Organica';
		$this->mTela('sobre_nos/estrutura_organica_add',$dados);
	}

	function estrutura_organica_save(){
		$this->sobre_nos_model->estrutura_organica_save();
		redirect(admin_url('sobre_nos/estrutura_organica'));
	}

	function estrutura_organica_alterar($id){
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['tipos'] = $this->configuracoes_model->listarTipos('geral');
		$dados['widgets'] = $this->widget_model->listarWidgets();
		$dados['sobre'] = $this->sobre_nos_model->buscarEstruturaOrganicaPeloId($id);
		$dados['titulo'] = 'Alterar Estrutura Orgánica';
		$this->mTela('sobre_nos/estrutura_organica_alterar',$dados);
	}

	function estrutura_organica_update($id){
		$this->sobre_nos_model->estrutura_organica_update($id);
		redirect(admin_url('sobre_nos/estrutura_organica'));
	}

}
