<?php
	include("conexion.php");
	$id_departamento=intval($_REQUEST['id_departamento']);
	$municipios = $conn->prepare("SELECT * FROM ubprovincia WHERE idDepa = '$id_departamento'") or die(mysqli_error());
		echo '<option value = "">PROVINCIA</option>';
	if($municipios->execute()){
		$a_result = $municipios->get_result();
	}
		while($row = $a_result->fetch_array()){
			echo '<option value = "'.$row['idProv'].'">'.utf8_encode( $row['provincia']).'</option>';
		}
?>