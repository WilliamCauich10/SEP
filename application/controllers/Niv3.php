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
class Niv3 extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> helper('form');
		$this-> load-> model('Admin_model');
	}
		function Inicio(){
		$this->load->view('Nivel3/principal');	
	}
	function Crear(){
		$this->load->view('Nivel3/CrearUser');	
	}
	function Editar(){
		$data['prueba']= $this-> Admin_model-> ver();
		$this->load->view('Nivel3/EditarUser',$data);	
	}
}