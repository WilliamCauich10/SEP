<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Controlador de Nivel 4
 * 
 *
 * Este controlador fue diseñado por 
 * el alumno Jose Ernesto Diaz Escobar
 * del Instituto Tecnologico de Chetumal
 * para la Secretaria de Educación Publica
*/
class Niv1 extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> helper('form');
		$this-> load-> model('Ingresalogin_model');
	}
	function Captura(){
		$this->load->view('Nivel1/Captura');
	}
	function Captura2(){
		$this->load->view('Nivel1/Captura2');

	}
	function ConsultaNi1(){
		$this->load->view('Nivel1/ConsultaNi1');

	}
	function Inicio(){
		$this->load->view('Nivel1/principal');	
	}
	function importar(){
		//obtenemos el archivo .csv
		$tipo = $_FILES['archivo']['type'];
		$tamanio = $_FILES['archivo']['size'];
		$archivotmp = $_FILES['archivo']['tmp_name'];		 
		//cargamos el archivo
		$lineas = file($archivotmp);
		//inicializamos variable a 0, esto nos ayudará a indicarle que no lea la primera línea
		$i=0;
		//Recorremos el bucle para leer línea por línea
		foreach ($lineas as $linea_num => $linea)
		{ 
		   //abrimos bucle
		   /*si es diferente a 0 significa que no se encuentra en la primera línea 
		   (con los títulos de las columnas) y por lo tanto puede leerla*/
		   if($i != 0) 
		   { 
		       //abrimos condición, solo entrará en la condición a partir de la segunda pasada del bucle.
		       /* La funcion explode nos ayuda a delimitar los campos, por lo tanto irá 
		       leyendo hasta que encuentre un ; */
		       $datos = explode(",",$linea);
		       //Almacenamos los datos que vamos leyendo en una variable
		       $nombre = trim($datos[0]);
		       $edad = trim($datos[1]);
		       $profesion = trim($datos[2]);
		       //guardamos en base de datos la línea leida en un array
		       $data = array(
				'nombre' => $nombre,
				'edad' => $edad,
				'profesion' => $profesion
				);
		 		// la insertamos mediante el modelo
		       // $this-> Ingresalogin_model-> insertar($data);
		       //cerramos condición
		   }
		 
		   /*Cuando pase la primera pasada se incrementará nuestro valor y a la siguiente pasada ya 
		   entraremos en la condición, de esta manera conseguimos que no lea la primera línea.*/
		   $i++;
		}//foreach
		echo '<script language="javascript">alert("Se ha insertado correctamente");</script>'; 

		$this->load->view('Nivel1/Captura');       
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
		
		$prueba="";
		if($Todos!= null){
			$Todos=$Todos.",";
			$prueba = "*,";
		}else{
			if ($Escuela!=null) {
				$Escuela=$Escuela.",";
				$prueba =$prueba.$Escuela;
			}
			if ($Turno!=null) {
				$Turno=$Turno.",";
				$prueba =$prueba.$Turno;
			}
			if ($Edad2!=null) {
				$Edad2=$Edad2.",";
				$prueba =$prueba.$Edad2;
			}
			if ($Nivel!=null) {
				$Nivel=$Nivel.",";
				$prueba =$prueba.$Nivel;
			}
			if ($Años!=null) {
				$Años=$Años.",";
				$prueba =$prueba.$Años;
			}
			if ($Asignatura!=null) {
				$Asignatura=$Asignatura.",";
				$prueba =$prueba.$Asignatura;
			}
			if ($Empleo!=null) {
				$Empleo=$Empleo.",";
				$prueba =$prueba.$Empleo;
			}
		}
		$consulta = substr($prueba,0,-1);

		echo $consulta;
	}
	function Filtros3(){
		$Todos = $this->input->post('Todos3');
		$Escuela = $this->input->post('Escuela3');
		$Turno = $this->input->post('Turno3');
		$Edad2 = $this->input->post('Edad3');
		$Nivel = $this->input->post('Nivel3');
		$Años = $this->input->post('Años3');
		$Empleo = $this->input->post('Empleo3');
		
		$prueba="";
		if($Todos!= null){
			$Todos=$Todos.",";
			$prueba = "*,";
		}else{
			if ($Escuela!=null) {
				$Escuela=$Escuela.",";
				$prueba =$prueba.$Escuela;
			}
			if ($Turno!=null) {
				$Turno=$Turno.",";
				$prueba =$prueba.$Turno;
			}
			if ($Edad2!=null) {
				$Edad2=$Edad2.",";
				$prueba =$prueba.$Edad2;
			}
			if ($Nivel!=null) {
				$Nivel=$Nivel.",";
				$prueba =$prueba.$Nivel;
			}
			if ($Años!=null) {
				$Años=$Años.",";
				$prueba =$prueba.$Años;
			}
			if ($Empleo!=null) {
				$Empleo=$Empleo.",";
				$prueba =$prueba.$Empleo;
			}
		}
		$consulta = substr($prueba,0,-1);
		echo $consulta;
	}
	function Filtros4(){
		$Todos = $this->input->post('Todos4');
		$Localidad = $this->input->post('Localidad');
		$Municipio = $this->input->post('Municipio');
		$Aulas = $this->input->post('Aulas');
		$Pupitres = $this->input->post('Pupitres');
		$Planea = $this->input->post('Planea');
		$Ceneval = $this->input->post('Ceneval');
		
		$prueba="";
		if($Todos!= null){
			$Todos=$Todos.",";
			$prueba = "*,";
		}else{
			if ($Localidad!=null) {
				$Localidad=$Localidad.",";
				$prueba =$prueba.$Localidad;
			}
			if ($Municipio!=null) {
				$Municipio=$Municipio.",";
				$prueba =$prueba.$Municipio;
			}
			if ($Aulas!=null) {
				$Aulas=$Aulas.",";
				$prueba =$prueba.$Aulas;
			}
			if ($Pupitres!=null) {
				$Pupitres=$Pupitres.",";
				$prueba =$prueba.$Pupitres;
			}
			if ($Planea!=null) {
				$Planea=$Planea.",";
				$prueba =$prueba.$Planea;
			}
			if ($Ceneval!=null) {
				$Ceneval=$Ceneval.",";
				$prueba =$prueba.$Ceneval;
			}
		}
		$consulta = substr($prueba,0,-1);
		echo $consulta;
	}
}
?>