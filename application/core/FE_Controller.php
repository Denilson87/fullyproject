<?php

//Front-End Controller para todos os controladores
class FE_Controller extends CI_Controller
{
	function mostarTela($tela, $dados){
		$this->load->view('website/include/_header');
		$this->load->view('website/'.$tela, $dados);
		$this->load->view('website/include/_footer');
	}

}
