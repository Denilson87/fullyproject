<?php

if (!function_exists('formatar_data_para_view')) {

    function formatar_data_para_view($data) { //entrada: Y-m-d
        if(empty($data) || $data == NULL) {
            return '';
        }

        $data = str_replace('-', '', $data);
        $dia = substr($data, 6, 2);
        $mes = substr($data, 4, 2);
        $ano = substr($data, 0, 4);
        return $dia . '/' . $mes . '/' . $ano; //saida: d/m/Y
    }

}

if (!function_exists('formatar_data_para_view_extenso')) {

    function formatar_data_para_view_extenso($data, $lingua) { //entrada: Y-m-d
        if(empty($data) || $data == NULL) {
            return '';
        }

        $data = str_replace('-', '', $data);
        $dia = substr($data, 6, 2);
        $mes = substr($data, 4, 2);
        $ano = substr($data, 0, 4);

        if($lingua == 'pt') {
            return $dia . ' de ' . mes_extenso($mes, 'pt') . ' de ' . $ano;
        } else if($lingua == 'en') {
            return mes_extenso($mes, 'en') . ' ' . $dia . ', ' . $ano;
        }
    }

}

function mes_extenso($numero_mes, $lingua) { //entrada: 12
    $mes_extenso = '';

    if($lingua == 'pt') {
        switch($numero_mes) {
            case 1: $mes_extenso = 'Janeiro'; break;
            case 2: $mes_extenso = 'Fevereiro'; break;
            case 3: $mes_extenso = 'Março'; break;
            case 4: $mes_extenso = 'Abril'; break;
            case 5: $mes_extenso = 'Maio'; break;
            case 6: $mes_extenso = 'Junho'; break;
            case 7: $mes_extenso = 'Julho'; break;
            case 8: $mes_extenso = 'Agosto'; break;
            case 9: $mes_extenso = 'Setembro'; break;
            case 10: $mes_extenso = 'Outubro'; break;
            case 11: $mes_extenso = 'Novembro'; break;
            case 12: $mes_extenso = 'Dezembro'; break;
        }

        return $mes_extenso; //saida: Dezembro

    } else if($lingua == 'en') {
        switch($numero_mes) {
            case 1: $mes_extenso = 'January'; break;
            case 2: $mes_extenso = 'February'; break;
            case 3: $mes_extenso = 'March'; break;
            case 4: $mes_extenso = 'April'; break;
            case 5: $mes_extenso = 'May'; break;
            case 6: $mes_extenso = 'June'; break;
            case 7: $mes_extenso = 'July'; break;
            case 8: $mes_extenso = 'August'; break;
            case 9: $mes_extenso = 'September'; break;
            case 10: $mes_extenso = 'October'; break;
            case 11: $mes_extenso = 'November'; break;
            case 12: $mes_extenso = 'December'; break;
        }

        return $mes_extenso; //saida: December
    }
}

if (!function_exists('extrair_ano_para_view')) {

    function extrair_ano_para_view($data) { //entrada: Y-m-d
        $data = str_replace('-', '', $data);
        $ano = substr($data, 0, 4);
        return $ano; //saida: Y
    }

}

if (!function_exists('formatar_data_para_model')) {

    function formatar_data_para_model($data) { //entrada: d/m/Y
        $data = str_replace('/', '', $data);
        $dia = substr($data, 0, 2);
        $mes = substr($data, 2, 2);
        $ano = substr($data, 4, 4);
        return $ano . '-' . $mes . '-' . $dia; //saida: Y-m-d
    }

}