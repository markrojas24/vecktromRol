<?php
$mysqli = new mysqli("localhost","root","root","academ");
$salida = "";
$query = "SELECT * FROM Rol ORDER By idRol";

if(isset($_POST['consulta'])){
    $q = $mysqli->real_scape_string($_POST['consulta']);
    $query= "SELECT nombreTra,rutTra, fechaTra, instalacionTra, turnoTra, horas, horasEx, atraso FROM Rol
    Where nombreTra LIKE '%".$q."%' OR instalacionTra LIKE '%".$q."%' OR rutTRa '%".$q."%'
     OR fechaTra '%".$q."%' ";

}


$resultado = $mysqli->query($query);

if($resultado->num_rows >0){

    $salida.="<table class='tabla_datos'>
                <thead>
                <tr>    
                    <td>Nombre</td>
                    <td>Rut</td>
                    <td>Fecha</td>
                    <td>Instalacion</td>
                    <td>Turno</td>
                    <td>Horas</td>
                    <td>Horas Extras</td>
                    <td>Atraso</td>
                </tr>
                </thead> 
                <tbody>";
    
        while($fila = $resultado->fetch_assoc()){
            $salida.= "<tr>
                <td>".$fila['nombreTra']."</td>
                <td>".$fila['rutTra']."</td>
                <td>".$fila['fechaTra']."</td>
                <td>".$fila['instalacionTra']."</td>
                <td>".$fila['turnoTra']."</td>
                <td>".$fila['horas']."</td>
                <td>".$fila['horasEx']."</td>
                <td>".$fila['atraso']."</td>
            </tr>";
        }

        $salida.="</tbody></table>";

}else{
    $salida.="No Hay Datos :(";


}


echo $salida;

$mysqli->close();


?>