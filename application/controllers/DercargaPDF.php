<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DercargaPDF extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this-> load-> helper('form');
		$this-> load-> model('Descarga_model');
	}

	function Descarga(){
		$hoy = date("dmyhis");
		$Nom= $this->input->post("user");
		$html ="<style>@page {
				margin-top: 5cm;
			    header: html_MyCustomHeader;
				footer: html_MyCustomFooter;
				}
		</style>";
		$html .="<htmlpageheader name=\"MyCustomHeader\">
	<table  style=\"width: 100%;\">
		<tbody>
			<tr>
				<th style=\"width: 25%; \"><img src=\"/SEP/img/SEPbanner.png\" style=\"width: 200px;\"> </th>
				<th style=\"width: 25%; font-size: 25px; \">Delegación Federal de la <br> Secretaria de Educación Publica <br> en Quintana Roo</th>
				<th style=\"width: 25%; \"><img src=\"/SEP/img/logo-qroo_0.png\" style=\"width: 150px;\"></th>
			</tr>	
		</tbody>
	</table>
</htmlpageheader>";
		$Usuario['Usuario']=$this-> Descarga_model-> NombreUsuario($Nom);
			foreach ($Usuario['Usuario']-> result() as $Usuario['Usuario']) { 
				$html .="
				<center> <h1>".$Usuario['Usuario']-> Nombre." </h1> </center>
				";
		}
		$html .=" <div class=\"cuerpo\" style=\"position:relative; margin-collapse:500;\">
		<table class=\"table table-striped\" style=\"width: 1000px; font-size: 17px;\"  >
			<thead>
				<tr>
					<th>Indicador</th>
					<th style=\" width:55px;\">Formula</th>
				";	
			$Años['Años']=$this-> Descarga_model-> años();
			foreach ($Años['Años']-> result() as $Años['Años']) { 
				$html .="
				<th>".$Años['Años']-> Años."</th>
				";
		}
		$html.=	"</tr>
			</thead>
			<tbody>";
			$Indicadores['Indicadores']=$this-> Descarga_model-> indicadores();
			foreach ($Indicadores['Indicadores']-> result() as $Indicadores['Indicadores']) { 
				$html .="<tr>
				<td>".$Indicadores['Indicadores']-> Nombre."</td>
				<td>".$Indicadores['Indicadores']-> Forma_de_Calculo."</td>";
				$Años2['Años2']=$this-> Descarga_model-> años();
				foreach ($Años2['Años2']-> result() as $Años2['Años2']) { 
					$año = $Años2['Años2']-> Años;
					$Valor['Valor']=$this-> Descarga_model-> resultado($Indicadores['Indicadores']-> Nombre,$Años2['Años2']-> Años,$Nom);

					if ($Valor['Valor']){
						foreach ($Valor['Valor'] -> result() as $Valor['Valor']) {
							$html.="<td align=\"center\">". $Valor['Valor'] -> Valor."</td>";
						}
					}else{ 
						$html.="<td align=\"center\">-</td>";
					}				
				}
				$html.="</tr>";
		}
		$html.=	"</tbody>
		</table>
		</div>
		<htmlpagefooter name=\"MyCustomFooter\">
			<p style=\"text-align: center;\"><b>Toda copia en PAPEL es un “Documento No Controlado” </b></p>
	
</htmlpagefooter>
		";
		 $pdfFilePath = "Indicadores".$Nom.$hoy.".pdf";
        $this->load->library('M_pdf');
        $mpdf = new mPDF('c', 'A4-L');  
 		$mpdf->WriteHTML($html);
		$mpdf->Output($pdfFilePath, "D");
	}
}