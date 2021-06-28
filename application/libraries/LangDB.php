<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Carrega os valores da lingua a partir da base de dados e nao da implementacao padrao do codeigniter
 *
 * Depende do model 'conteudo_pagina_model'
 *
 * @author Joshua
 */
class LangDB {

    /**
     * Busca os conteudos com base no nome da pagina e na lingua escolhida.
     * @return array Array com os valores na tabela.
     */
    public function load_language($nome_pagina, $lingua) {
        $CI = &get_instance();
        $CI->load->model('conteudo_pagina_model');
        $array_conteudo_pagina = $CI->conteudo_pagina_model->get_by_nome_pagina($nome_pagina);
        $array_of_langs = array();
        foreach ($array_conteudo_pagina as $row) {
            if ($lingua == 'pt') {
                $array_of_langs[$row['chave']] = nl2br($row['conteudo_pt']);//nl2br para tranformar os paragrafos em <br/>
            } else if ($lingua == 'en') {
                $array_of_langs[$row['chave']] = nl2br($row['conteudo_en']);
            }
        }
        return $array_of_langs;
    }
}