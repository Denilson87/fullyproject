<?php
require_once APPPATH . 'core/Admin_controller.php';

class Dashboard extends Admin_Controller
{

	public function index(){
		$this->load->model('mensagem_model');
		$data['mensagens'] = $this->mensagem_model->buscarMensagensDash();
		$data['usuario_logado'] = $this->session->userdata('usuario');
		$data['titulo'] = 'Dashboard';
		$this->mTela('dashboard',$data);
	}
}
