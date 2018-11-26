<?php  

include("conexion.php");

$id=$_GET['idAlumnos'];


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


$query="UPDATE alumnos SET Nombre=$nombre `Apellido Paterno`=$apellidoP `Apellido Materno`=$apellidoM Fecha_De_Nacimiento='' Grado=$grado Grupo=$grupo CURP=$curp Domicilio=domicilio Localidad=$localidad Municipio=$municipio CodigoPosta=$codigoPostal numeroTelefono=$telefono CorreoElectronico=$correoElectronico Estatus=$estatus";




        $resultado=$conexion->query($query);
        echo $resultado;
        
	// header(Location:ConsultarAlumnosAdmin.php);
?>