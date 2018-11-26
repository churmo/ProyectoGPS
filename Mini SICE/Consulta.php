<?php 
session_start();
$usuario = $_GET['usuario'];
$pass=$_GET['contra'];
$dir="Location:Login.php";


	$mysql = new mysqli("127.0.0.1:3306","root","","escuela");
	$listaUser=$mysql->query("select * from maestros");
	

	foreach ($listaUser as $user) {
		if ($user['Nombre']==$usuario && $pass==$user["ApellidoPaterno"]) {
		$dir="Location:ConsultarAlumnosMaestro.php";
		$_SESSION["Nombre"]=$user['ApellidoPaterno']." ".$user['ApellidoMaterno']." ".$user['Nombre'];
		$_SESSION["id"]=$user['idMaestros'];
		$id=$user['idMaestros'];

		$_SESSION["tipo"]='mestro';
		$_SESSION["obj"]=$user;
		$listaUser=$mysql->query("SELECT * FROM `imparten` i join `materias` m on i.idMaterias=m.idMaterias where idMaestros =$id ");
		foreach ($listaUser as $user) {
			// if ($user[0]==2017) {
			
			$_SESSION["Grado"]=$user["Grado"];
			$_SESSION["Grupo"]=$user["Grupo"];
			// }

			
		}



		

		// header("Location:Calificaciones-Maestro.html");
		break;
		}else{
			
			 // header("Location:Login.php");
		}
	}
	$listaUser=$mysql->query("select * from alumnos");
	foreach ($listaUser as $user) {
		if ($user['Nombre']==$usuario && $pass==$user["Apellido Paterno"]) {
		$dir="Location:CalificacionesAlumno.php";
		$_SESSION["Nombre"]=$user['Apellido Paterno']." ".$user['Apellido Materno']." ".$user['Nombre'];
		$_SESSION["id"]=$user['idAlumnos'];
		$_SESSION["tipo"]='alumno';
		$_SESSION["obj"]=$user;

		// header("Location:Calificaciones-Maestro.html");
		break;
		}else{
			
			 // header("Location:Login.php");
		}
	}

	$listaUser=$mysql->query("select * from Admin");
	foreach ($listaUser as $user) {
		if ($user['Nombre']==$usuario && $pass==$user["ApellidoPaterno"]) {
		$dir="Location:ConsultarAlumnosAdmin.php";
		$_SESSION["Nombre"]=$user['Apellido Paterno']." ".$user['Apellido Materno']." ".$user['Nombre'];
		$_SESSION["id"]=$user['idAlumnos'];
		$_SESSION["tipo"]='admin';
		$_SESSION["obj"]=$user;

		// header("Location:Calificaciones-Maestro.html");
		break;
		}else{
			
			 // header("Location:Login.php");
		}
	}

	header($dir."?id=".$_SESSION["id"]."&nombre=".$_SESSION["Nombre"]);


	// if (a==0) {
	// 	 header("Location:Login.php");
	// }
 ?>