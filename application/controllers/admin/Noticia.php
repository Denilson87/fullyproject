<?php
require_once APPPATH . 'core/Admin_controller.php';

class Noticia extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
		$this->load->model('noticia_model');
		$this->load->model('pagina_model');
		$this->load->model('media_model');
	}

	function index(){
		$dados['noticias'] = $this->noticia_model->listarNoticias();
		$dados['titulo'] = 'Noticias';
		$this->mTela('inicio/seccao_noticias',$dados);
	}

	function add(){
		$dados['paginas'] = $this->pagina_model->listarPaginas();
		$dados['medias'] = $this->media_model->listarMedia();
		$dados['titulo'] = 'Adicionar Noticia';
		$this->mTela('inicio/add_noticia',$dados);
	}

	function save(){
		$this->noticia_model->save();
		redirect(admin_url('Noticia'));
	}

	function ver($id){
		$dados['usuario'] = $this->noticia_model->getById($id);
		$dados['titulo'] = 'Detalhes do Usuario';
		$this->mTela('usuarios/ver',$dados);
	}

	function alterar($id){
		$dados['usuario'] = $this->noticia_model->getById($id);
		$dados['titulo'] = 'Alterar Usuario';
		$this->mTela('usuarios/alterar',$dados);
	}

	function update($id){
		$this->noticia_model->update($id);
		redirect(admin_url('media'));
	}

	function delete($id){
		$this->noticia_model->delete($id);
		redirect(admin_url('media'));
	}
}
