<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticacao extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        /*
         * Impedir que se grave a pagina de Login na cache
         */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

        /*
         * Verificar se a sessão do utilizador actual é valida.
         * Caso seja, entrar no sistema.
         */
        if ($this->session->userdata('logado') != NULL && $this->session->userdata('usuario') != NULL) {
            redirect(action_url('admin/dashboard'));
        }
		$CI = &get_instance();

		$CI->load->view('admin/include/login');
    }

    public function autenticar() {
        $usuario = $this->input->post('usuario');
        $senha = $this->input->post('senha');

        $usuario_valido = $this->usuario_model->autenticar($usuario, sha1($senha));

        if ($usuario_valido != null || !empty($usuario_valido)) {
            $this->session->set_userdata('logado', true);
            $this->session->set_userdata('usuario', $usuario_valido);
            redirect(action_url('admin/dashboard'));
        } else {
            $this->session->set_flashdata('login_invalido', true);
            redirect(admin_url('autenticacao/login'));
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(admin_url('autenticacao/login'));
    }

}
