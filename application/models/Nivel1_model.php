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
class Nivel1_model extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> database();
	}

	function insertar($data){
		$this-> db-> insert(
			'pruebacargar',array(
			'Nombre'=>$data['nombre'],
			'Edad'=>$data['edad'],
			'Profesion'=> $data['profesion']
			)); 
	}
	function insertarValores($data){
		$this-> db-> insert(
			'indaño',array(
			'Nombre'=>$data['Nombre'],
			'Año'=>$data['Año'],
			'Valor'=> $data['Valor'],
			'User'=> $data['Usuario']
			)); 
	}
	function actualizaValores($datas,$Nom,$User,$Año){
		$data = array(
               'Nombre' => $datas['Nombre'],
               'Año' => $datas['Año'],
               'Valor' => $datas['Valor'],
               'User' => $datas['Usuario'],
            );
		$query =$this->db->where('Nombre', $Nom);
		$query =$this->db->where('Año', $Año);
		$query =$this->db->where('User', $User);
		$query =$this->db->update('indaño', $data);
	}
	function prue($currentDate){
		$query = $this-> db->select('title');
        $query = $this-> db->where('date',$currentDate);
        $query = $this-> db->where('status','1');
        $query = $this-> db->get('events');
        if ($query -> num_rows()>0) return $query;
		else return false; 
	}
	function años(){
		$queryAño = $this -> db -> get('años');
		if ($queryAño -> num_rows()>0) return $queryAño;
		else return false; 
	}
}
