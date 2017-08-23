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
	function Inicio($usr){
		$data['usr']=$usr;
		$this->load->view('Nivel3/principal',$data);	
	}
	function Crear($usr){
		$data['usr']=$usr;
		$this->load->view('Nivel3/CrearUser',$data);	
	}
	function Editar($usr){
		$data['usr']=$usr;
		$data['prueba']= $this-> Admin_model-> ver();
		$this->load->view('Nivel3/EditarUser',$data);	
	}
	function actualizaUsuarios(){
		$datos ['id']= $this-> input-> post('txtID');
		$id= $this-> input-> post('txtID');
		$datos ['nomb']= $this-> input-> post('txtNom');
		$datos ['usr']=$this -> input-> post('txtUser');
		$datos ['pw']= $this-> input-> post('txtPW');
		$datos ['rol']=$this -> input-> post('txtRol');
		$datas = array(
			'txtNom' => $this -> input-> post('txtNom'),
			'txtUser' => $this -> input-> post('txtUser'),
			'txtPW' => $this -> input-> post('txtPW'),
			'txtRol' => $this -> input-> post('txtRol'),
			);
		$data['prueba']= $this-> Admin_model-> actualizaUser($datas,$datos['id']);
		return $this-> Editar($datos);
	}
	function creaUsuarios(){
		$datos ['nomb']= $this-> input-> post('txtNom');
		$datos ['usr']=$this -> input-> post('txtUser');
		$datos ['pw']= $this-> input-> post('txtPW');
		$datos ['niv']= $this-> input-> post('Nivel');
		switch ($datos['niv']) {
			case 'Localidad':
					$datos['Nivel']='Nivel1';
				break;
			case 'Estatal':
					$datos['Nivel']='Nivel2';
				break;
			case 'Delegado':
					$datos['Nivel']='Nivel4';
				break;
		}
		$data = array(
			'txtNom' => $this -> input-> post('txtNom'),
			'txtUser' => $this -> input-> post('txtUser'),
			'txtPW' => $this -> input-> post('txtPW'),
			'txtRol' => $datos['Nivel'],
			);
		$data['prueba']= $this-> Admin_model-> crearUser($data);
		return $this-> Editar($datos);
	}
	// falta el usr 
	function borrarUser($id){
		$data['prueba']= $this-> Admin_model-> borrarUser($id);
		return $this->Editar();
	}
	// incompleto
	function crearInd($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/CrearIndicador",$data);
	}
	// incompleto
	function editarInd($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/EditarIndicador",$data);
	}
	function crearFecha($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/CrearFecha",$data);
	}
	function editarFecha($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/EditarFecha",$data);
	}
	function actualizaFechas(){
		$año =$this ->input ->post('txtValAño');
		$valaño = $this -> input->post('txtAños');
		$valor = $_POST['radioStatus']; 
		// echo $valor; 
		$datas = array(
			'valaño' => $valaño,
			'valor' => $valor,
			);
		$data['prueba']= $this-> Admin_model-> actualizaFechas($datas,$año);
		return $this->editarFecha();
	}
}