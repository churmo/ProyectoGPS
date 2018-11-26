<?php 
    session_start();
    $_SESSION["seleccionado"]="dos";


       $conexion = new mysqli("localhost","root","","escuela");
        $sql="SELECT * from alumnos";
        $result=$conexion->query("select * from alumnos");
        $tabla="";

        



         ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carousel Theme - Contact Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/ConsultarAlumnosAdmin.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/TablaFiltrarAlumnos.js"></script>


<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

</head>

<body id="subpage">

<div id="templatemo_header_wrapper">
    
	<div id="site_title"><h1><a href="#">Carousel Template</a></h1></div>
     <div id="templatemo_menu" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
            <li><a href="about.html">Información</a>           
            <!-- <li><a href="blog.html">Iniciar Sesión</a></li> -->
            <li><a href="#">Calificaciones</a> 
            <li><a href="Calificaciones-Maestro.html" class="selected">Admin
            </a></li>
            	
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->

<div id="templatemo_main">
	
    <h2>Gestionar Alumnos</h2>
        <div class="half float_l">
        <h4><center>Quintana Martinez Nancy Carolina </center></h4>
            <p style="margin-left: 30px;"><b>Ciclo Escolar:</b> Febrero 2018 - Diciembre 2018 <br />
                 
                <b>&nbspFiltrar por:</b>
                <center>                    
                   
             nombre:<input type="text" id="FiltrarNombre" style="width: 130px; margin-top:  10px; margin-bottom: 10px;"  />&nbsp&nbsp
             Grado:<input type="text" id="FiltrarGrado" style="width: 90px;" />&nbsp&nbsp
             Grupo:<input type="text" id="FiltrarGrupo" style="width: 70px;" /> &nbsp&nbsp
             <input type="button" value="aceptar" onclick="Filtrar('tblAlumnos')" />
            
                </center>
            <div id="tblAlumnos">  

            <!-- Creacion de tabla dinamica -->
        <table>
            <!-- Definir Encabezados -->
                <tr>
                <th>Nombre</th>
                <th>Grado</th>
                <th>Grupo</th>
                <th>Direccion</th>
                <th>Localidad</th>
                <th></th>
                </tr>
            <!-- Llenar tabla            -->
        <?php      
            // recorremos las filas que retorna la consulta       
                foreach ($result as $i) {
            // si Curp esta vacia ponemos "N/A"
                    $Curp=$i["CURP"];
                    if ($Curp=="") {
                        $Curp="N/A";
                    }
        ?>
        <!-- creamos las celdas por cada Dato -->
            <tr>
                <td><?php echo $i["Nombre"]." ".$i["Apellido Paterno"]." ".$i["Apellido Materno"] ?></td>
                <td><?php echo $i["Grado"] ?></td>
                <td><?php echo $i["Grupo"] ?></td>
                <td><?php echo $i["Domicilio"] ?></td>
                <td><?php echo $i["Localidad"] ?></td>
                <td ><button id="<?php echo $i["idAlumnos"] ?>" onclick="CargarDatos(this.id)" >Ver</button></td>
            </tr>
        <!-- fin del foreach -->
        <?php 
            }
         ?>

        </table>

                        
                        
                        <div class="cleaner h10"></div>
                        
                

                
            </div>
		</div>

        <div class="half float_r">
            <div class="Foto"><img src="Img/usuario-sin-foto.png" width="250px" /></div>
            <h4>Mas informacion del alumno</h4>
            <h6><strong>Datos personales</strong></h6>
                <b>Nombre:</b> <label id="nombre">Nombre</label><br />
                <b>Fecha de nacimiento:</b><label id="FechaDeNacimiento">fecha</label><br />
                <b>Grado:</b><label id="Grado">Grado</label><br />
                <b>Grupo:</b><label id="Grupo">Grupo</label><br />
                <b>Curp:</b><label id="Curp">Curp</label><br />
                <b>Domicilio:</b><label id="Domicilio">Domicilio</label><br />
                <b>Localidad:</b><label id="Localidad">Localidad</label><br />
                <b>Municipio:</b><label id="Municipio">Municipio</label><br />
                <b>Codigo Postal:</b><label id="CodigoPostal">Codigo postal</label><br />
                <b>Numero tel:</b><label id="NumeroTelefono">Telefono</label><br />
                <b>Correo:</b><label id="Correo">Correo</label><br />
                <b>Estatus:</b><label id="Estatus">Estatus</label><br />
                
                

                
                
                 <input type="button" id="btnEditar" value="Editar" name="-1" onclick="Editar(this.name);" />
                 <script>
                     function Editar(id){
                        location.href="EditarAlumnos.php?idAlumnos="+id;
                     }
                 </script>

                <input type="button" id="btnEliminar" value="Eliminar" name="-1" onclick="preguntar(this.name)" />

               <br /><br />

            <script language="JavaScript"> 
            function preguntar(id){ 
                if (confirm('¿Estas seguro? ')){ 
                    location.href="eliminar.php?idAlumnos="+id;
                } 


            } 
            </script>
            

            <br />
                      <div class="vertical-menu">
              <a href="#" >Inicio</a>
              <a href="ConsultarAlumnosAdmin.php" class="active">Gestionar Alumnos</a>
              <a href="RegistrarAlumnos.php">Registrar Alumnos</a>
              <a href="RegistrarMaestro.php" >Registrar Maestros</a>
              
              
                <!--<a href="" onclick="myFunction()">Calificaciones</a> -->

                
                <script>/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function drop(){
     var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
}
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}</script>
              
              <a href="#">Boletas</a>
              <a href="login.php">Salir</a>
            </div>
        </div>

        

            <div class="cleaner h40"></div>
            <!-- <h6><strong>Location Two</strong></h6>
          		880-990 Praesent quam mauris,<br />
          Fusce cursus turpis lacus 11440<br />
                Donec mauris nunc<br /><br />
				
			<strong>Phone:</strong> 010-447-0250 <br />
            <strong>Email:</strong> <a href="mailto:info@company.com">two@company.com</a>  <br />
             -->
            <div class="cleaner h40"></div>
            <h6><strong>Location Three</strong></h6>
   		  420-630 Donec scelerisque eleifend,<br />
                Nulla nec leo sit 11990<br />
                Habitant Morbi<br /><br />
				
			<strong>Phone:</strong> 030-080-0220 <br />
            <strong>Email:</strong> <a href="mailto:info@company.com">three@company.com</a>  <br />
            
        </div>
        
        <div class="cleaner h40"></div>
        
    
    	<div class="cleaner"></div>
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

<div id="templatemo_bottom_wrapper">
    <div id="templatemo_bottom">
    	<div class="col one_third">
        	<h4><span></span>Blogroll</h4>
            <div class="bottom_box">
                <ul class="footer_list">
                    <li><a href="#">Learn HTML CSS</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Flash Gallery</a></li>
                    <li><a href="#">Website Templates</a></li>
                    <li><a href="#">Free Graphics</a></li>
                </ul>  
			</div>
        </div>
        
        <div class="col one_third">
        	<h4><span></span>Updates</h4>
            <div class="bottom_box">
              <ul class="twitter_post">
                    <li>Curabitur nec dui venenatis sem consectetur facilisis. Donec velit nisi, lacinia sed et. <a href="#">http://bit.ly/13IwZO</a></li>
                    <li>Proin dignissim, diam nec <a href="#">@TemplateMo</a> enim lorem tempus orci, ac imperdiet ante purus in justo.</li>
                </ul>
			</div>
        </div>
        <div class="col one_third no_margin_right">
        	<h4><span></span>About Us</h4>
            <div class="bottom_box">
                <p><em>Duis sem nisl, dignissim ac feugiat in, mattis sit amet est. Duis leo leo, suscipit cursus vehicula sit amet. Sed varius pellentesque massa vel rutrum.</em></p><br />              
                <div class="footer_social_button">
                    <a href="#"><img src="images/facebook.png" title="facebook" alt="facebook" /></a>
                    <a href="#"><img src="images/flickr.png" title="flickr" alt="flickr" /></a>
                    <a href="#"><img src="images/twitter.png" title="twitter" alt="twitter" /></a>
                    <a href="#"><img src="images/youtube.png" title="youtube" alt="youtube" /></a>
                    <a href="#"><img src="images/feed.png" title="rss" alt="rss" /></a>
                </div>
            </div>
        </div>
        
    	<div class="cleaner"></div>
    </div> <!-- END of tempatemo_bottom -->
</div> <!-- END of tempatemo_bottom_wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    	Copyright © 2048 Your Company Name
    </div> <!-- END of templatemo_footer_wrapper -->
</div> <!-- END of templatemo_footer -->

</body>


<script>
    
    var links = document.getElementsByTagName("link"); for (var x in links) { var link = links[x]; if (link.getAttribute("type").indexOf("css") > -1) { link.href = link.href + "?id=" + new Date().getMilliseconds(); } }
    
</script>

</html>