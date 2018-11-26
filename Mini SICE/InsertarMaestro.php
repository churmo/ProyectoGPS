<?php  

include("conexion.php");
	



$nombre= $_GET['N'];
$apellidoP=$_GET['AP'];
$apellidoM=$_GET['AM'];


$domicilio=$_GET['Do'];
$telefono=$_GET['Te'];
$correoElectronico=$_GET['CE'];
$estatus=$_GET['Sta'];
$sexo=$_GET['Sexo'];
$nivel=$_GET['Nivel'];




$query="INSERT INTO `maestros` (`Sexo`, `FechaNacimiento`, `Nombre`, `ApellidoMaterno`, `ApellidoPaterno`, `NumeroHoras`, `NivelEstudios`, `Domicilio`, `numeroTelefono`, `CorreoElectronico`)values ('$sexo','1990-10-10','$nombre','$apellidoM','$apellidoP',0,'$nivel','$domicilio','$telefono','$correoElectronico')";



	
        $resultado=$conexion->query($query);
        echo $query." - ".$resultado;


         include("ActualizarJSONmaestros.php");



?>