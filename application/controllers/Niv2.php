<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Controlador de Nivel 4
 * 
 *
 * Este controlador fue diseñado por 
 * el alumno William Jesus Cauich Martin
 * del Instituto Tecnologico de Chetumal
 * para la Secretaria de Educación Publica
*/
class Niv2 extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> helper('form');
		$this-> load-> model('Ingresalogin_model');
	}
		function Inicio(){
		$this->load->view('Nivel2/principal');	
	}
	function CrearN2(){
		$this->load->view('Nivel2/CrearN2');	
	}
	function ConsultaN2(){
		$this->load->view('Nivel2/ConsultaN2');	
	}
}