<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carousel Theme - Contact Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/RegistrarAlumnos.css" rel="stylesheet" type="text/css" />
<!-- templatemo 358 carousel -->
<!-- 
Carousel Template 
http://www.templatemo.com/preview/templatemo_358_carousel 
-->
<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="js/showhide.js"></script> 
<script type="text/JavaScript" src="js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="js/Validaciones.js"></script>
<script type="text/javascript" src="js/CapaNegocio.js"></script>
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

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
            
            
            <li><a href="ConsultarAlumnosAdmin.php" class="selected">Admin
            </a></li>
            	
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->

<div id="templatemo_main">
	
    <h2>Registrar Maestro</h2>
        <div class="half float_l">
       
            <div id="contact_form_Alumno">
              <form style="width: 400px; margin-left: 40px;" class="contact_form">
                
                         Apellido Paterno: <input type="text" id="AP" name="Apellido_Paterno" onchange="validarTexto(this.id)"  ><br />
                    Apellido Materno: <input type="text" id="AM"  name="Apellido_Materno" onchange="validarTexto(this.id)"><br />
                    Nombre: <input type="text" id="N" style="width: 240px" name="Nombre" onchange="validarTexto(this.id)""><br/>
                    Nivel de Estudios:  <Select id="Nivel" class="boton">
                        <option>Bachillerato
                        <option>Licenciatura
                        <option>Ingenieria
                        <option>Especialidad
                        <option>Maestria
                        <option>Doctorado
                        </select>
                        
                        &nbsp Sexo:  <Select  id="Sexo" class="boton">
                        <option>Masculino
                        <option>Femenino
                        
                        </Select>
                        <br />
                    Domicilio: <input type="text" id="Do" style="width: 260px;" name="Domicilio" onchange="validarDireccion(this.id)"  /><br />
                    
                    Telefono: <input type="text" id="Te" style="width: 160px;" name="Telefono" onchange="validarTelefono(this.id)" />   <br />   

                     Correo Electronico: <input type="text" id="CE" style="width: 250px;" name="Correo_Electronico" onchange="validarMail(this.id)" /><br />        
                    Estatus:<Select id="Sta" name="Estatus" class="boton" >

                        <option>Activo
                        <option>Baja
                        <option>Baja Temporal
                        
                        
                        </Select>
                
                </form>
                        
                        
                        <div class="cleaner h10"></div>
                        
                       
                         
                      
                        
                        <center>
                       <button onclick="AgregarMaestro()">Guardar</button>
                       </center>
                <script>
                           function AgregarMaestro(){

                            if (confirm('¿Estas seguro que deseas guardar cambios? ')) {
                                
                var AP = document.getElementById("AP").value;
                var AM = document.getElementById("AM").value;
                var N = document.getElementById("N").value;
                
                
                var Do = document.getElementById("Do").value;
                
                
                
                var Te = document.getElementById("Te").value;
                var CE = document.getElementById("CE").value;
                
                var Sta = document.getElementById("Sta").options[document.getElementById("Sta").selectedIndex].value;
                
                var nivel = document.getElementById("Nivel").options[document.getElementById("Nivel").selectedIndex].value;

                var sexo = document.getElementById("Sexo").options[document.getElementById("Sexo").selectedIndex].value;




                var concat = "&AP="+AP+"&AM="+AM+"&N="+N+"&Te="+Te+"&CE="+CE+"&Sta="+Sta+"&Nivel="+nivel+"&Sexo="+sexo+"&Sta="+Sta+"&Do="+Do;
                location.href="InsertarMaestro.php?"+concat;
                            

                        }
                           }
                       </script>
                
            </div>
		</div>
        <div class="half float_r">
        	<h4>Datos del Admin:</h4>
            <h6><strong><?php echo $_SESSION["obj"]["Nombre"]." ". $_SESSION["obj"]["ApellidoPaterno"]. " " .$_SESSION["obj"]["ApellidoMaterno"] ?></strong></h6>
                
               
          
				
			<br />
            <div class="vertical-menu">
              <a href="ConsultarAlumnosAdmin.php"  >Gestionar Alumnos</a>
              <a href="RegistrarAlumnos.php" >Registrar Alumnos</a>
              <a href="RegistrarMaestro.php" class="active">Registrar Maestros</a>
              <a href="RegistrarMateria.php" >Registrar Materias</a>
              <a href="Estadisticas.php" >Mejores Promedios</a>
              <a href="login.php" >Salir</a>
              
                <!--<a href="" onclick="myFunction()">Calificaciones</a> -->

               
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
</html>