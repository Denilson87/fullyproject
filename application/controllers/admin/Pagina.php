<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/admin/Admin_ViewCaller.php';
require_once APPPATH . 'core/Admin_controller.php';

class Pagina extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        $this->CONTROLLER_BASE_URL = 'pagina';
        $this->MODEL_PRINCIPAL = $this->pagina_model;
        $this->NOME_ENTIDADES = 'paginas';
        $this->COLUNA_ORDENACAO = 'Descrição';
        $this->ORDEM = 'Crescente';
        $this->NUMERO_CAMPOS_PESQUISA = 1;
        $this->COLUNAS_TABELA = array(
            'Descrição'
        );
        $this->CAMINHO_VIEW_LISTAGEM = 'pagina/paginas';
    }

    public function index() {
        echo 'dimande';
    }

    public function adicionar() {
        Admin_ViewCaller::show('pagina/pagina_novo', null);
    }

    public function editar() {
        if ($_GET) {
            $id_pagina = $this->input->get('id_pagina');
            $pagina = $this->pagina_model->get_by_id($id_pagina);
            $parametros_view['pagina'] = $pagina;
            $parametros_view['conteudos_pagina'] = $this->conteudo_pagina_model->get_by_id_pagina($id_pagina);
            Admin_ViewCaller::show('pagina/pagina_editar', $parametros_view);
        }
    }

    public function actualizar() {
        if ($_POST) {
            $id_pagina = $this->input->post('id_pagina');

            $conteudos_db = $this->conteudo_pagina_model->get_by_id_pagina($id_pagina);

            $conteudos = array();

            foreach($conteudos_db as $conteudo_db) {
                $conteudos[] = array(
                    'id_conteudo_pagina' => $conteudo_db['id_conteudo_pagina'],
                    'conteudo_pt' => $this->input->post($conteudo_db['id_conteudo_pagina'] . '_pt'),
                    'conteudo_en' => $this->input->post($conteudo_db['id_conteudo_pagina'] . '_en')
                );
            }

            $this->conteudo_pagina_model->update_batch($conteudos);
            $this->session->set_flashdata('mensagem', 'Actualizado com sucesso.');
            redirect(admin_url('pagina'));
        }
    }

}
