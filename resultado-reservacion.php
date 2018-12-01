<?php
	$from = $_POST["from"];
	$to = $_POST["to"];

	if ($to < $from)
	{
		echo '<script>
 	alert("Ingrese una fecha igual o mayor a la fecha de entrada");
 </script>';
	}else{
		header("Location: resultado-habitacion.php");
	}




 ?>
 