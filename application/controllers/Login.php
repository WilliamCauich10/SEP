<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Controlador de inicio de sesion
 *
 * Este controlador fue diseñado por 
 * el alumno William Jesus Cauich Martin
 * del Instituto Tecnologico de Chetumal
 * para la Secretaria de Educación Publica
*/
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> helper('form');
		$this-> load-> model('Ingresalogin_model');
	}
	public function index()
	{
		$this->load->view('Login/login');
	}
	public function comprobar(){
		$datos ['usr']= $this-> input-> post('txtUsr');
		$datos ['pw']=$this -> input-> post('txtPw');
		$data['prueba']= $this-> Ingresalogin_model-> ingreso($datos['usr'],$datos['pw']);
		if ($data['prueba']) {
			foreach ($data['prueba']-> result() as $data['prueba']) {
				$rol=$data['prueba']->Rol;  
			}
			switch ($rol) {
		        case 'Nivel1':
		        	$datos['Nivel']='Nivel1';
		     		$this->load->view('Nivel1/principal',$datos);       
		            break;
		        case 'Nivel2':
		            $datos['Nivel']='Nivel2';
		     		$this->load->view('Nivel1/principal',$datos);
		            break;
		        case 'Nivel2':
		            $datos['Nivel']='Nivel3';
		     		$this->load->view('Nivel1/principal',$datos);
		            break;
		        case 'Nivel2':
		            $datos['Nivel']='Nivel4';
		     		$this->load->view('Nivel1/principal',$datos);
		            break;
    		}
		}else{
			return $this-> index();
		}
	}
}
