<?php  

include("conexion.php");
	
$id=$_GET['idAlumnos'];


$nombre= $_GET['N'];
$apellidoP=$_GET['AP'];
$apellidoM=$_GET['AM'];

$grado=$_GET['G'];
$grupo=$_GET['Gru'];
$curp=$_GET['Cu'];
$domicilio=$_GET['Do'];
$localidad=$_GET['Lo'];
$municipio=$_GET['Mu'];
$codigoPostal=$_GET['CP'];
$telefono=$_GET['Te'];
$correoElectronico=$_GET['CE'];
$estatus=$_GET['Sta'];
$fecha=$_GET['Fecha'];



$query="UPDATE alumnos SET Nombre='$nombre', `Apellido Paterno`='$apellidoP', `Apellido Materno`='$apellidoM', Fecha_De_Nacimiento='$fecha', Grado='$grado', Grupo='$grupo', CURP='$curp', Domicilio='$domicilio', Localidad='$localidad', Municipio='$municipio', CodigoPostal='$codigoPostal', numeroTelefono='$telefono', CorreoElectronico='$correoElectronico', Estatus='$estatus' where idAlumnos=$id";



	
        $resultado=$conexion->query($query);
        // echo $query;


        include("ActualizarJSON.php");



?>