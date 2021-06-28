<?php
require_once APPPATH . 'core/Admin_controller.php';

class Galeria extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('galeria_model');
		$this->load->model('media_model');
	}

	function index(){
		$dados['albuns'] = $this->galeria_model->getAllAlbuns();
		$dados['total_photos'] = $this->galeria_model->totalPhotos(1);
		$dados['titulo'] = 'Albuns da Galeria de Fotos';
		$this->mTela('galeria/galeria',$dados);
	}

	function galeria_video(){
		$dados['videos'] = $this->galeria_model->getVideos();
		$dados['titulo'] = 'Galeria de Videos';
		$this->mTela('galeria/video',$dados);
	}

	function add_album(){
		$dados['titulo'] = 'Adicionar Album';
		$dados['medias'] = $this->media_model->listarMedia();
		$this->mTela('galeria/add_album',$dados);
	}

	function add_photo($id){
		$dados['titulo'] = 'Adicionar Foto';
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['id_album'] = $id;
		$this->mTela('galeria/add_photo',$dados);
	}

	function add_video(){
		$dados['titulo'] = 'Adicionar Video';
		$dados['medias'] = $this->media_model->listarMedia();
		$this->mTela('galeria/add_video',$dados);
	}

	function save_video(){
		$this->galeria_model->saveVideo();
		redirect(admin_url('galeria/galeria_video'));
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
		$dados['items'] = $this->galeria_model->getAllAlbumPhotos($id);
		$dados['id_album'] = $id;
		$dados['titulo'] = 'Detalhes do Album';
		$this->mTela('galeria/ver_items',$dados);
	}

	function alterar($id){
		$dados['slider'] = $this->galeria_album_model->getById($id);
		$dados['titulo'] = 'Alterar Slider';
		$this->mTela('galeria/alterar',$dados);
	}

	function alterar_video($id){
		$dados['video'] = $this->galeria_model->getVideoById($id);
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['titulo'] = 'Alterar Video';
		$this->mTela('galeria/alterar_video',$dados);
	}

	function update($id){
		$this->galeria_album_model->update($id);
		redirect(admin_url('galeria_album'));
	}

	function update_video($id){
		$this->galeria_model->updateVideo($id);
		redirect(admin_url('galeria/galeria_video'));
	}

	function delete($id){
		$this->galeria_album_model->delete($id);
		redirect(admin_url('galeria_album'));
	}

	function delete_video($id){
		$this->galeria_model->deleteVideo($id);
		redirect(admin_url('galeria/galeria_video'));
	}

}
