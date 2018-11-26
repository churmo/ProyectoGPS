<?php 
$usuario = $_GET['usuario'];
$pass=$_GET['contra'];
$a=0;


	$mysql = new mysqli("127.0.0.1:3306","root","","escuela");
	$listaUser=$mysql->query("select * from maestros");
	print_r($listaUser);

	foreach ($listaUser as $user) {
		if ($user['Nombre']==$usuario) {
		$a=$a+1;
		header("Location:Calificaciones-Maestro.html");
		break;
		}else{
			header("Location:Login.html");
		}
	}
	if (a==0) {
		// header("Location:Login.php");
	}
 ?>