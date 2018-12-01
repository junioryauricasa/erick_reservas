<?php 
    require_once("dompdf/dompdf_config.inc.php");
    
    //$conexion = mysql_connect("localhost","root","");
    //mysql_select_db("db_tiendastock",$conexion);

//obteniendo variables
//variables
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipotarjeta = $_POST['tipotarjeta'];
$numtarjeta = $_POST['numtarjeta'];
$titulartarjeta = $_POST['titulartarjeta'];
$mescaduca = $_POST['mescaduca'];
$aniocaduca = $_POST['aniocaduca'];
$codigocvc = $_POST['codigocvc'];
$mail = $_POST['mail'];
//$cmail = $_POST['cmail'];
$telefono = $_POST['telefono'];
$id_departamento = $_POST['id_departamento'];
$municipio = $_POST['municipio'];
$distrito = $_POST['distrito'];
$solicitud = $_POST['solicitud'];


//obteniendo fecha
date_default_timezone_set('America/Lima');
$dia = date("N"); //dia en numeros
$mesdelanio = date("m"); //mes del anio en numero
$diadelmes = date("j"); //dia del mes
$anio = date("Y"); //anio en 4 digitos

$time = date("H:i:s"); //time formato Hor/minuto/segundo

$timehora = date("g");
$timeminuto = date("i");
$timeminuto2 = date("a");

switch ($mesdelanio) {
  case '1':
    $mesdelanio1 = "Enero";
    break;
  case '2':
    $mesdelanio1 = "Febrero";
    break;
  case '3':
    $mesdelanio1 = "Marzo";
    break;
  case '4':
    $mesdelanio1 = "Abril";
    break;
  case '5':
    $mesdelanio1 = "Mayo";
    break;
  case '6':
    $mesdelanio1 = "Junio";
    break;
  case '7':
    $mesdelanio1 = "Julio";
    break;
  case '8':
    $mesdelanio1 = "Agosto";
    break;
  case '9':
    $mesdelanio1 = "septiembre";
    break;
  case '10':
    $mesdelanio1 = "Octubre";
    break;
  case '11':
    $mesdelanio1 = "Noviembre";
    break;
  case '12':
    $mesdelanio1 = "Diciembre";
    break;
  default:
    echo "no se definio correctamente";
    break;
}


$fechadoc = $diadelmes.' '.$mesdelanio1.' a las '.$time; 


$codigoHTML='
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte Reserva</title>
</head>
<body>
	<p>'.$fechadoc.'</p>
	<h1>Resultado de Reserva:</h1>
    <p>
    	<ul>
    		<li>Nombres: '.$nombres.'</li>
    		<li>Apellidos: '.$apellidos.'</li>
    		<li>Tipo Tarjeta: '.$tipotarjeta.'</li>
    		<li>Número de Tarjeta: '.$numtarjeta.'</li>
    		<li>Titular de Tarjeta: '.$titulartarjeta.'</li>
    		<li>Caducidad:'.$mescaduca."/".$aniocaduca.'</li>
    		<li>CVC: '.$codigocvc.'</li>
    		<li>Email: '.$mail.'</li>
    		<li>Celular: '.$telefono.'</li>
    		<li>Ubigeo: '.$id_departamento."/".$municipio."/".$distrito.'</li>
    		<li>Solicitud: '.$solicitud.'</li>
    	</ul>
    </p>
</body>
</html>

 ';


$nmrndm = 'ReporteRegistro';
$namedoc = $nmrndm.$fechadoc.'.pdf';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream($namedoc);
?>