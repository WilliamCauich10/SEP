<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DescargaEXCEL extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> helper('form');
		$this-> load-> model('Descarga_model');
	}
	function Descarga(){
		$data['usr']= $this->input->post("user");
		// $data['items']=$items;
		$data['page_title']='Indicadores';
		$data['filename']='prueba'.date("dmyhis");
		// echo "hola";
		$this->load->view('Nivel1/p',$data);
	}
}