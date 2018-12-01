<?php
	include("conexion.php");
	$municipio=intval($_REQUEST['municipio']);
	$distritos = $conn->prepare("SELECT * FROM ubdistrito WHERE idProv = '$municipio'") or die(mysqli_error());
		echo '<option value = "">DISTRITO</option>';
	if($distritos->execute()){
		$a_result = $distritos->get_result();
	}
		while($row = $a_result->fetch_array()){
			echo '<option value = "'.$row['idDist'].'">'.utf8_encode( $row['distrito']).'</option>';
		}
?>