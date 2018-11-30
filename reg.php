<div class="span6">
	<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Agregar Nueva Instalación</h3>	
		<form action="reg.php" method="POST" name="form">
		<input type="text" name="nombre" placeholder="INSTALACIÓN">
		<br/>
		<input type="submit" value ="Ingresar Instalación" name="btn1">
		</form>

		<?php

	if(isset($_POST['btn1'])){
	include("conexion.php");

	$nombre = $_POST['nombre'];

	$conexion->query("INSERT INTO $db (nombre) values ('$nombre')");
	include("cerrar_conexion.php");
	echo "Instalacion Creada";

	}



	?>

	</div>
	</div>
	<div class="span6">
	
	</div>
	