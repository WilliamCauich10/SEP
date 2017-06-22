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
}
?>