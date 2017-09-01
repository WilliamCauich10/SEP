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
	// vistas 
	function Inicio($usr){
		$data['usr']=$usr;
		$this->load->view('Nivel3/principal',$data);	
	}
	function Crear($usr){
		$data['usr']=$usr;
		$this->load->view('Nivel3/CrearUser',$data);	
	}
	// incompleto
	function crearInd($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/CrearIndicador",$data);
	}
	function crearFecha($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/CrearFecha",$data);
	}
	function crearAgen($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/CrearEvento",$data);	
	}
	function Editar($usr){
		$data['usr']=$usr;
		$data['prueba']= $this-> Admin_model-> ver();
		$this->load->view('Nivel3/EditarUser',$data);	
	}
	function editarFecha($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/EditarFecha",$data);
	}
	function editarInd($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/EditarIndicador",$data);	
	}
	function editarAgen($usr){
		$data['usr']=$usr;
		$this->load->view("Nivel3/EditarEvento",$data);	
	}
	// Crear
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
	function creaFecha(){
		$usr=$this -> input-> post('user');
		$data = array(
			'txtStatus' => $this -> input-> post('Tipo'),
			'txtAño' => $this -> input-> post('txtAño'),
			);
		$data['prueba']= $this-> Admin_model-> crearFech($data);
		return $this-> editarFecha($usr);
	}
	// Borrado
	function borrarUser(){
		$usr =$this ->input ->post('user');
		$id =$this ->input ->post('id');
		$data['prueba']= $this-> Admin_model-> borrarUser($id);
		return $this->Editar($usr);
	}
	function borrarFecha(){
		$usr =$this ->input ->post('user');
		$año =$this ->input ->post('año');
		$data['prueba']= $this-> Admin_model-> borrarFecha($año);
		return $this->editarFecha($usr);	
	}
	function borrarIndica(){
		$usr =$this ->input ->post('user');
		$id =$this ->input ->post('id');
		$data['prueba']= $this-> Admin_model-> borrarIndicador($id);
		return $this -> editarInd($usr);
		// echo "eliminar el indicador ".$id." del usuario ".$usr;
	}
	// Actualiza edita
	function actualizaFechas(){
		$usr =$this ->input ->post('txtUsuario');
		$año =$this ->input ->post('txtValAño');
		$valaño = $this -> input->post('txtAños');
		$valor = $_POST['radioStatus']; 
		$datas = array(
			'valaño' => $valaño,
			'valor' => $valor,
			);
		$data['prueba']= $this-> Admin_model-> actualizaFechas($datas,$año);
		return $this->editarFecha($usr);
	}
	function actualizaUsuarios(){
		$usr =$this ->input ->post('txtUsuario');
		$datos ['id']= $this-> input-> post('txtID');
		$id= $this-> input-> post('txtID');
		$datos ['nomb']= $this-> input-> post('txtNom');
		$datos ['usuario']=$this -> input-> post('txtUser');
		$datos ['pw']= $this-> input-> post('txtPW');
		$datos ['rol']=$this -> input-> post('txtRol');
		$datas = array(
			'txtNom' => $this -> input-> post('txtNom'),
			'txtUser' => $this -> input-> post('txtUser'),
			'txtPW' => $this -> input-> post('txtPW'),
			'txtRol' => $this -> input-> post('txtRol'),
			);
		$data['prueba']= $this-> Admin_model-> actualizaUser($datas,$datos['id']);
		return $this-> Editar($usr);
	}
	function actualizaIndicador(){
		$usr =$this ->input ->post('user');
		$ID =$this -> input ->post('id');	
		$data = array(
			"nomb" => $this -> input ->post('txtNombre'),	
			"defi" => $this -> input ->post('txtDefinicion'),
			"info" => $this -> input ->post('txtInformacion'),
			"inte" => $this -> input ->post('txtInterpretacion'),
			"form" => $this -> input ->post('txtFormula'),
			);
		$data['prueba']= $this-> Admin_model-> actualizaIndicador($ID,$data);
		return $this->editarInd($usr);
	}
}