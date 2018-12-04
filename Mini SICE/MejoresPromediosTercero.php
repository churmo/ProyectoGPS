
<?php 

	
	$mysql = new mysqli("127.0.0.1:3306","root","","escuela");
	$listaUser=$mysql->query("select a.Nombre, a.Grupo, a.Grado,m.Nombre as maestro, round((select AVG(Calificacion) from calificaciones where idAlumnos=a.idAlumnos),1)  as Promedio from maestros m join calificaciones c on m.idMaestros = c.idMaestros join alumnos a on a.idAlumnos = c.idAlumnos where c.Fecha_De_Registro like '%2017%' and a.Grado like 'tercero' group by a.idAlumnos order by Promedio desc limit 3;");




 ?>

            
             <table style="margin-left: 50px;">
                <th colspan="5" bgcolor="#C4C1C1"><center>Mejores calificaciones de Tercer Grado</center></th>
                 <tr> 
                    <th>Nombre del alumno</th>
                    <th>Grado</th>
                    <th>Grupo</th>
                    <th>Maestro</th>
                    <th>Calificacion final</th>
                </tr>
            
             <?php      
             // include("MejoresPromedios.php");
                   
                foreach ($listaUser as $i) {
        ?>
        <!-- creamos las celdas por cada Dato -->
            <tr>
                <td><?php echo $i["Nombre"];?></td>
                <!-- <td><?php echo $Curp ?></td> -->
                <td><?php echo $i["Grado"]; ?></td>
                <td><?php echo $i["Grupo"]; ?></td>
                <td><?php echo $i["maestro"]; ?></td>
                <td><?php echo $i["Promedio"]; ?></td>
                
            </tr>
        <!-- fin del foreach -->
        <?php 
            }
         ?>
