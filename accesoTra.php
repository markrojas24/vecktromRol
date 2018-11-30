<?php 
$password = "123456";
if ($_POST['password'] != $password) { 
?>
<h2>Administrador</h2>
<form name="form" method="post" action="">
<input type="password" name="password"><br>
<input type="submit" value="Login"></form>
<?php 
}else{

    header ('Location: http://localhost:8888/academia3corregido/academia3/trabajador.php');

} 
?>