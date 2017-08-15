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
class Admin_model extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> database();
	}
	function ver(){
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
	function prue($currentDate){
		$query = $this-> db->select('title');
        $query = $this-> db->where('date',$currentDate);
        $query = $this-> db->where('status','1');
        $query = $this-> db->get('events');
        if ($query -> num_rows()>0) return $query;
		else return false; 
	}
	function actualizaUser($datas,$id){
		$data = array(
			'Nombre' => $datas['txtNom'],
			'Usuario' => $datas['txtUser'],
			'PW' => $datas['txtPW'],
			'Rol' => $datas['txtRol']
            );
		$query =$this->db->where('ID', $id);
		$query =$this->db->update('usuarios', $data);
	}
	function actualizaFechas($datas,$año){
		$data = array(
			'Años' => $datas['valaño'],
			'Status' => $datas['valor']
            );
		$query =$this->db->where('Años', $año);
		$query =$this->db->update('años', $data);
	}
	function crearUser($data){
		$this-> db-> insert(
			'usuarios',array(
			'Nombre'=>$data['txtNom'],
			'Usuario'=>$data['txtUser'],
			'PW'=> $data['txtPW'],
			'Rol'=> $data['txtRol']
			)); 
	}
	function borrarUser($id){
		$query =$this->db->where('ID', $id);
		$query =$this->db->delete('usuarios'); 
	}
	function creaAgen($data){
		$this -> db->insert(
			'events',array(
				'title' => $data[''] ,
				'date' => '' ,
				'created'=>$data[''],
				'modified' => $data[''] ,
				'status' => $data[''] ,
			));
	}
}
