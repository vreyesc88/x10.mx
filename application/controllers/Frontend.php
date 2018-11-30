<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index( $pagina = 'inicio' )
	{
		if ( ! file_exists(APPPATH.'views/frontend/'.$pagina.'.php'))
        {
                show_404();
        }
		
		$data['titulo_pagina'] = ucfirst($pagina);
		
		$this->load->view('templates/header', $data);
        $this->load->view('frontend/'.$pagina, $data);
        $this->load->view('templates/footer', $data);
	}
	
	
	
	
}