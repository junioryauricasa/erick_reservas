<?php 
include("conexion.php");
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Listas dependientes con MySQLi usando PHP y jQuery - Sistemas Web</title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
	</head>
<body>
	<nav class = "navbar navbar-default">
		<div class = "container-fluid">
			<a class  = "navbar-brand" href = "http://obedalvarado.pw/">Sistemas Web</a>
		</div>
	</nav>
	<div class = "container-fluid">	
		<div class = "row">
			<div class = "col-md-3"></div>
			<div class = "col-md-6 well">
				<h4 class = "text-primary">Listas dependientes con MySQLi usando PHP y jQuery</h4>
				<hr style = "border-top: 1px dotted #8c8b8b;"/>
					<form class = "form-inline">
						<div class  =  "form-group">
							<label>Departamentos:</label>
							<select id = "id_deparatamento" class = "form-control" name = "id_deparatamento" required = "required">
								<option value = "">Selecciona un departamento</option>
								<?php
									$sql = $conn->prepare("SELECT * FROM does");
									if($sql->execute()){
										$g_result = $sql->get_result();
									}
									while($row = $g_result->fetch_array()){
								?>
									<option value = "<?php echo $row['does_id']?>"><?php echo utf8_encode($row['does_name'])?></option>
								<?php
										}
									$conn->close();	
								?>
							</select>
						</div>	
						<div class = "form-group">
							<label>Municipios:</label>
							<select  id = "municipio" name = "municipio"  class = "form-control" disabled = "disabled" required = "required">
								<option value = "">Selecciona un municipio</option>
							</select>
						</div>
					</form>
			</div>
		</div>
	</div>	
</body>
<script src = "js/jquery-3.1.1.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#id_deparatamento').on('change', function(){
				if($('#id_deparatamento').val() == ""){
					$('#municipio').empty();
					$('<option value = "">Selecciona un municipio</option>').appendTo('#municipio');
					$('#municipio').attr('disabled', 'disabled');
				}else{
					$('#municipio').removeAttr('disabled', 'disabled');
					$('#municipio').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
				}
		});
	});
</script>
</html>