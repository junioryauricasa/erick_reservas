<?php
	include("conexion.php");
	$id_departamento=intval($_REQUEST['id_deparatamento']);
	$municipios = $conn->prepare("SELECT * FROM toes WHERE does_toes_id = '$id_departamento'") or die(mysqli_error());
		echo '<option value = "">Selecciona un municipio:  </option>';
	if($municipios->execute()){
		$a_result = $municipios->get_result();
	}
		while($row = $a_result->fetch_array()){
			echo '<option value = "'.$row['toes_id'].'">'.utf8_encode( $row['toes_name']).'</option>';
		}
?>