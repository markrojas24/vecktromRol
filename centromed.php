<?php

try{
	$sqlconnection = new pdo ('mysql:host=localhost;dbname=academ;charset=utf8','root','root');
}
catch(PDOException $pe){
	echo 'Cannot connect to database';
	die;
}

?>



<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Vecktrom Seguridad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

	<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
		<li class=""><a href="admin.php">Inicio</a></li>
			<li class=""><a href="asistencia.php">Ingresar Asistencia</a></li>
			<li class=""><a href="registrar.php">Ver Registro de Asistencia</a></li>
			<li class=""><a href="accesoAd.php">Administradores</a></li>
			<li class=""><a href="accesoTra.php">Trabajadores</a></li>

	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
			  <li><a href="index.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
	

	

		


<div class="well well-small">
		<h3>Registrar Asistencia</h3>	
		<form action="ini.php" method="POST">
		<form method="POST" action="">
		<select name="tra_centro">
		<option>Seleccionar Trabajador</option>
		<?php
					$commandstring = "SELECT idTrabajador, Nombre FROM tra_centro order by idTrabajador";
					$cmd = $sqlconnection -> prepare($commandstring);
					$cmd->execute();
					$result = $cmd->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $row){
						echo '<option value="'.$row['idTrabajador'].'">'.$row['Nombre'].'</option>';
					}
		?>
		</select>
		<br/>
		<input type="text" name="texto" id="texto" value="CentroMed" readonly="readonly" >
		</br>
		<input type="date">
		
	<h3>Turno</h3>
	<input type="radio" name="turno" value="1"> [1]
	<input type="radio" name="turno" value="2"> [2]
	<input type="radio" name="turno" value="SC"> [SC]
	<input type="radio" name="turno" value="LM"> [LM]
	<input type="radio" name="turno" value="F"> [F]
	<input type="radio" name="turno" value="P"> [P]
	<input type="radio" name="turno" value="V"> [V]
	
	<br>

	

		<br/>
		<input type="number" name="horas" id="number" placeholder="Horas" readonly="readonly" value="12" >
		</br>
		<input type="number" name="horasEx" id="number" placeholder="Horas Extras" >
		</br>
		<input type="number" name="horasAt" id="number" placeholder="Horas Atraso" >

</form>
		<input type="submit" value ="Ingresar">
		<input type="submit" value="Limpiar">
		</form>
	</div>

		

<!--/////////////////////////////////////////placeholder="INSTALACIÓN"//////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Vecktrom Security <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>