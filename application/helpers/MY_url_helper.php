<?php

/**
 * Action URL
 *
 * Cria uma URL para as accoes dos controllers baseada no ficheiro index.php definido.
 * Exemplo: action_url('CONTROLLER/METHOD') <=> http://localhost/linkup/index.php/CONTROLLER/METHOD
 * Onde >> Controller = 'candidato' e Action = 'adicionar'
 *
 *
 * @access	public
 * @param string
 * @return	string
 */
if (!function_exists('action_url')) {

    function action_url($action_url = '') {
        // return base_url('index.php/' . $action_url);
        return base_url($action_url);
    }

}

if (!function_exists('current_url')) {
	/**
	 * Current URL
	 *
	 * Returns the full URL (including segments) of the page where this
	 * function is placed
	 *
	 * @return	string
	 */
	function current_url()
	{
		$CI = &get_instance();
        $url = $CI->config->site_url($CI->uri->uri_string());
        $url = $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url; /* conservar a querystring */
        return str_replace('/index.php', '', $url); /* remove /index.php */
	}
}

if (!function_exists('admin_url')) {

    function admin_url($admin_url = '') {
        return base_url('admin/' . $admin_url);
    }

}