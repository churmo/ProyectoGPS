<?php  
session_start();
include("conexion.php");

$id=$_GET['idAlumnos'];




$query="DELETE from alumnos where idAlumnos=$id";



        $resultado=$conexion->query($query);

header("Location:ConsultarAlumnosAdmin.php");
?>