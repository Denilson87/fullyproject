<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/FE_Controller.php';
require_once APPPATH . 'libraries/EmailSender.php';

class Website extends FE_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('configuracoes_model');
		$this->load->model('slider_model');
		$this->load->model('pagina_model');
		$this->load->model('noticia_model');
		$this->load->model('widget_model');
		$this->load->model('pagina_widget_model');
		$this->load->model('menu_model');
		$this->load->model('contactos_model');
		$this->load->model('mensagem_model');
		$this->load->model('galeria_model');
		$this->load->model('portfolio_model');
		$this->load->model('sobre_nos_model');
		$this->load->vars('footer_contacto',$this->contactos_model->contacto());

    }

	public function index()	{
		$dados['slides'] = $this->slider_model->getById(1);
		$dados['noticia1'] = $this->noticia_model->buscarNoticia(2);
		$dados['noticia2'] = $this->noticia_model->buscarNoticia(1);
		$dados['noticia3'] = $this->noticia_model->buscarNoticia(4);
		$dados['noticia4'] = $this->noticia_model->buscarNoticia(5);
		$dados['noticia5'] = $this->noticia_model->buscarNoticia(6);
		$dados['noticia6'] = $this->noticia_model->buscarNoticia(7);
		$dados['mensagem'] = $this->pagina_model->getByType('Mensagem');
		$dados['paginas'] = $this->pagina_model->getManyByType('area_logistica');
		$dados['parcerias'] = $this->portfolio_model->getManyByType("parceria");
        $this->mostarTela('inicio',$dados);
    }

    public function page($id){
		$dados['pagina'] = $this->pagina_model->getById($id);
		$dados['title'] = $dados['pagina']->titulo;
		$this->mostarTela('page',$dados);
	}

	public function noticia($id){
		$dados['pagina'] = $this->pagina_model->getById($id);
		$dados['paginas'] = $this->pagina_model->getManyByType('noticias');
		$dados['title'] = $dados['pagina']->titulo;
		$this->mostarTela('noticia',$dados);
	}

	public function noticias(){
		$dados['noticias'] = $this->pagina_model->getManyByType('noticias');
		$this->mostarTela('noticias',$dados);
	}

	public function galeria(){
		$dados['albuns'] = $this->galeria_model->getAllAlbuns();
		$this->mostarTela('galeria',$dados);
	}

	public function galeria_videos(){
		$dados['items'] = $this->galeria_model->getAllAlbumPhotos(1);
		$dados['videos'] = $this->galeria_model->getVideos();
		$this->mostarTela('galeria_videos',$dados);
	}

	public function galeria_album($id){
		$dados['items'] = $this->galeria_model->getAllAlbumPhotos($id);
		$dados['titulo'] = $this->galeria_model->getAlbumTitle($id);
		$this->mostarTela('galeria_album',$dados);
	}

    public function sobre_nos() {
		$dados['info'] = $this->sobre_nos_model->getAbout();
		$this->mostarTela('sobre_nos',$dados);
    }

	public function oportunidades() {
		$this->mostarTela('oportunidades',null);
	}

	public function fornecedores() {
		$this->mostarTela('fornecedores',null);
	}

	public function parcerias() {
		$dados['parcerias'] = $this->portfolio_model->getByTypeWithCategory("parceria");
		$dados['categorias'] = $this->configuracoes_model->listarCategoriasPeloTipo("parceria");
		$this->mostarTela('parcerias',$dados);
	}

	public function trabalhar_enhl() {
		$this->mostarTela('trabalhar_enhl',null);
	}

	public function portfolio() {
		$dados['portfolio'] = $this->portfolio_model->getByType("principal");
		$this->mostarTela('portfolio',$dados);
	}

	public function projectos() {
		$this->mostarTela('projectos',null);
	}

	public function unidades_negocio() {
		$dados['paginas'] = $this->pagina_model->getManyByType('area_logistica');
		$dados['widgets'] = $this->menu_model->getItens('1');
		$dados['itens'] = $this->menu_model->getItens('1');
		$dados['pagina'] = $this->pagina_model->getByAlias('nossas-areas-logistica');
		$this->mostarTela('unidades_negocio',$dados);
	}

	public function areas_logistica($id){
		$dados['widgets'] = $this->pagina_widget_model->getWidgetsByPageId($id);
		$dados['paginas'] = $this->pagina_model->getManyByType('area_logistica');
		$dados['itens'] = $this->menu_model->getItens('1');
		$dados['pagina'] = $this->pagina_model->getById($id);
		$this->mostarTela('unidades_negocio',$dados);
	}

	public function estrutura_organica() {
		$dados['estrutura'] = $this->sobre_nos_model->buscarEstruturaOrganica();
		$this->mostarTela('estrutura_organica',$dados);
	}

	public function marcos() {
		$dados['info_hstorica'] = $this->sobre_nos_model->listarInformacaoHistorica();
		$this->mostarTela('marcos',$dados);
	}

	public function aviacao() {
		$this->mostarTela('aviacao',null);
	}

	public function cabotagem() {
		$this->mostarTela('cabotagem',null);
	}

	public function imobiliario() {
		$this->mostarTela('imobiliario',null);
	}

	public function manutencao() {
		$this->mostarTela('manutencao',null);
	}

	public function saude() {
		$this->mostarTela('saude',null);
	}

	public function portos() {
		$this->mostarTela('portos',null);
	}

	public function mapa() {
		$this->mostarTela('contactos_mapa',null);
	}

    public function contactos() {
		$dados['contactos'] = $this->contactos_model->contacto();
		$this->mostarTela('contactos', $dados);
    }

    function send_message(){
		$this->mensagem_model->save();
		redirect('website/contactos');
	}

	public function zmi() {
		$this->mostarTela('zmi',null);
	}

	public function arpjv() {
		$this->mostarTela('arpjv',null);
	}

	public function sscale() {
		$this->mostarTela('sscale',null);
	}

	public function bonatti() {
		$this->mostarTela('bonatti',null);
	}

	public function enhils() {
		$this->mostarTela('enhils',null);
	}

	public function lngshipping() {
		$this->mostarTela('lngshipping',null);
	}

	public function belleli() {
		$this->mostarTela('belleli',null);
	}

	public function enmar() {
		$this->mostarTela('enmar',null);
	}

	public function technip() {
		$this->mostarTela('technip',null);
	}

	public function save_oportunidade(){

	}
}
