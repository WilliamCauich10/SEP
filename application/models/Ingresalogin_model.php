<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Modelo de inicio de sesion
 * 
 *
 * Este Modelo fue diseñado por 
 * el alumno William Jesus Cauich Martin
 * del Instituto Tecnologico de Chetumal
 * para la Secretaria de Educación Publica
*/
class Ingresalogin_model extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> database();
	}
	function ingreso($usr,$pw){
		$query = $this-> db->where('Usuario',$usr);
		$query = $this-> db->where('PW',$pw);
		$query = $this-> db->get('usuarios');
		if ($query -> num_rows()>0) return $query;
		else return false; 
	}
	function insertar($data){
		$this-> db-> insert(
			'pruebacargar',array(
			'Nombre'=>$data['nombre'],
			'Edad'=>$data['edad'],
			'Profesion'=> $data['profesion']
			)); 
	}
}
