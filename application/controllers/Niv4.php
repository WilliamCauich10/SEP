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
class Niv4 extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> helper('form');
		$this-> load-> model('Ingresalogin_model');
	}
	function Indicadores(){
		$this->load->view('Nivel4/indicadores');
	}
	function Filtros1(){
		$Todos = $this->input->post('Todos');
		$Genero = $this->input->post('Genero');
		$Grado = $this->input->post('Grado');
		$Edad = $this->input->post('Edad');
		$Becario = $this->input->post('Becario');
		$Indigena = $this->input->post('Indigena');
		$NEE = $this->input->post('NEE');
		$Trabajo = $this->input->post('Trabajo');
		$Modalidad = $this->input->post('Modalidad');
		$Turno = $this->input->post('Turno');
		$Promedio = $this->input->post('Promedio');
		$prueba="";
		if($Todos!= null){
			$Todos=$Todos.",";
			$prueba = "*,";
		}else{
			if ($Genero!=null) {
				$Genero=$Genero.",";
				$prueba =$prueba.$Genero;
			}
			if ($Grado!=null) {
				$Grado=$Grado.",";
				$prueba =$prueba.$Grado;
			}
			if ($Edad!=null) {
				$Edad=$Edad.",";
				$prueba =$prueba.$Edad;
			}
			if ($Becario!=null) {
				$Becario=$Becario.",";
				$prueba =$prueba.$Becario;
			}
			if ($Indigena!=null) {
				$Indigena=$Indigena.",";
				$prueba =$prueba.$Indigena;
			}
			if ($NEE!=null) {
				$NEE=$NEE.",";
				$prueba =$prueba.$NEE;
			}
			if ($Trabajo!=null) {
				$Trabajo=$Trabajo.",";
				$prueba =$prueba.$Trabajo;
			}
			if ($Modalidad!=null) {
				$Modalidad=$Modalidad.",";
				$prueba =$prueba.$Modalidad;
			}
			if ($Turno!=null) {
				$Turno=$Turno.",";
				$prueba =$prueba.$Turno;
			}
			if ($Promedio!=null) {
				$Promedio=$Promedio.",";
				$prueba =$prueba.$Promedio;
			}
		}
		// $str = $prueba;
		// echo strlen($str);
		$consulta = substr($prueba,0,-1);
		// $consulta=$consulta.";";
		echo $consulta;
	}
	function Filtros2(){
		$Todos = $this->input->post('Todos2');
		$Escuela = $this->input->post('Escuela');
		$Turno = $this->input->post('Turno');
		$Edad2 = $this->input->post('Edad2');
		$Nivel = $this->input->post('Nivel');
		$Años = $this->input->post('Años');
		$Asignatura = $this->input->post('Asignatura');
		$Empleo = $this->input->post('Empleo');
		
	}
}
?>