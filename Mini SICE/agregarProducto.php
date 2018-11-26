<?php  

include("conexion.php");

$nombre= $_POST['Nombre'];
$apellidoP=$_POST['Apellido_Paterno'];
$apellidoM=$_POST['Apellido_Materno'];

$grado=$_POST['Grado'];
$grupo=$_POST['Grupo'];
$curp=$_POST['CURP'];
$domicilio=$_POST['Domicilio'];
$localidad=$_POST['Localidad'];
$municipio=$_POST['Municipio'];
$codigoPostal=$_POST['Codigo_Postal'];
$telefono=$_POST['Telefono'];
$correoElectronico=$_POST['Correo_Electronico'];
$estatus=$_POST['Estatus'];




$query="INSERT INTO `alumnos` (Nombre,`Apellido Paterno`,`Apellido Materno`,Fecha_De_Nacimiento,CicloEscolar,Grado,Grupo,CURP,Domicilio,Localidad,Municipio,CodigoPostal,numeroTelefono,CorreoElectronico,FechaInicio,Estatus) VALUES ('$nombre','$apellidoP','$apellidoM','01-01-1995','2018-2024','$grado','$grupo','$curp','$domicilio','$localidad','$municipio','codigoPostal','$telefono','$correoElectronico','2018-11-06','Activo');";



        $resultado=$conexion->query($query);
        echo $resultado;
	header("Location:RegistrarAlumnos.php");
?>