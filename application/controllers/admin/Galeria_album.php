<?php
require_once APPPATH . 'core/Admin_controller.php';

class Galeria_album extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('Galeria_model');
		$this->load->model('album_item_model');
		$this->load->model('media_model');
	}

	function index(){
		$dados['albuns'] = $this->galeria_album_model->listarAlbuns();
		$dados['total_items'] = $this->album_item_model->totalItems();
		$dados['titulo'] = 'Albuns da Galeria de Fotos';
		$this->mTela('galeria/galeria_album',$dados);
	}

	function add(){
		$dados['titulo'] = 'Adicionar Album';
		$dados['medias'] = $this->media_model->listarMedia();
		$this->mTela('galeria/add',$dados);
	}

	function add_item($id){
		$dados['titulo'] = 'Adicionar Item';
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['id_album'] = $id;
		$this->mTela('galeria/add_album_item',$dados);
	}

	function save(){
		$this->galeria_album_model->save();
		redirect(admin_url('galeria_album'));
	}

	function save_item(){
		$this->galeria_album_model->saveItem();
		redirect(admin_url('galeria_album'));
	}

	function ver($id){
		$dados['items'] = $this->album_item_model->listarItems($id);
		$dados['id_album'] = $id;
		$dados['titulo'] = 'Detalhes do Album';
		$this->mTela('galeria/ver_items',$dados);
	}

	function alterar($id){
		$dados['slider'] = $this->galeria_album_model->getById($id);
		$dados['titulo'] = 'Alterar Slider';
		$this->mTela('galeria/alterar',$dados);
	}

	function update($id){
		$this->galeria_album_model->update($id);
		redirect(admin_url('galeria_album'));
	}

	function delete($id){
		$this->album_item_model->delete($id);
		redirect(admin_url('galeria_album'));
	}
}
