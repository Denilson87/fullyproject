<?php
require_once APPPATH . 'core/Admin_controller.php';

class Mensagens extends Admin_Controller
{
	function index(){
		$this->load->model('mensagem_model');
		$data['mensagens'] = $this->mensagem_model->buscarMensagens();
		$data['titulo'] = 'Lista de Mensagens';
		$this->mTela('mensagens', $data);
	}

}
