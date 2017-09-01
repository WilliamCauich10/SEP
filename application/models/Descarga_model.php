<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Modelo de administrador
 * 
 *
 * Este Modelo fue diseñado por 
 * el alumno William Jesus Cauich Martin
 * del Instituto Tecnologico de Chetumal
 * para la Secretaria de Educación Publica
*/
class Descarga_model extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> database();
	}
	function años(){
		$query = $this -> db -> get('años');
		if ($query -> num_rows()>0) return $query;
		else return false; 
	}
	function indicadores(){
		$query = $this -> db -> get('indicadores');
		if ($query -> num_rows()>0) return $query;
		else return false; 
	}
	function resultado($Nombre,$Años,$Usuario){
		$query = $this-> db->where('User',$Usuario);
		$query = $this-> db->where('Nombre',$Nombre);
		$query = $this-> db->where('Año',$Años);
		$query = $this -> db -> get('IndAño');
		if ($query -> num_rows()>0) return $query;
		else return false; 
	}
	function NombreUsuario($user){
		$query = $this-> db->where('Usuario',$user);
		$query = $this -> db -> get('usuarios');
		if ($query -> num_rows()>0) return $query;
		else return false; 
	}
}
