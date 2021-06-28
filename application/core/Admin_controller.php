<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

		if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL){
			redirect(admin_url('autenticacao/login'));
		}
    }

	function mTela($tela, $info){
    	$info['usuario'] = $this->session->userdata('usuario');
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar',$info);
		$this->load->view('admin/'.$tela, $info);
		$this->load->view('admin/include/footer');
	}

    protected function isUsuarioValido() {
        if ($this->session->userdata('logado') == NULL && $this->session->userdata('usuario') == NULL) {
            return FALSE;
        }
        return TRUE;
    }


}
