<?php session_start();
if ($_SESSION["tipo"]!='mestro') {
        header("Location:login.php");
    }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carousel Theme - Contact Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/Calificaciones-Maestro.css" rel="stylesheet" type="text/css" />
<!-- templatemo 358 carousel -->
<!-- 
Carousel Template 
http://www.template8mo.com/preview/templatemo_358_carousel 
-->
<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="js/showhide.js"></script> 
<script type="text/JavaScript" src="js/jquery.mousewheel.js"></script> 

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
            <li><a href="about.html">Información</a>           
            <!-- <li><a href="blog.html">Iniciar Sesión</a></li> -->
            <li><a href="#">Calificaciones</a> 
            <li><a href="Calificaciones-Maestro.html" class="selected">Maestro
            </a></li>
            	
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->

<div id="templatemo_main">
	
    <h2>Registrar Calificaciones</h2>
        <div class="half float_l">
        <h4><center>Quintana Martinez Nancy Carolina </center></h4>
            <p style="margin-left: 30px;"><b>Ciclo Escolar:</b> Febrero 2018 - Diciembre 2018 <br />
            <b>Grupo:</b> <?php echo $_SESSION["Grado"] ?> <?php echo $_SESSION["Grupo"] ?></p>
            <div id="Calificaciones-Maestro">
              <form method="post" name="contact" action="#" >
                        
                        Alumno: <Select name="estado" class="boton">
                        <option>Efrain Jared Ramirez Diaz
                        <option>Miguel Alejandro Vazquez Alberto
                        <option>Juan Armando Perez Delta
                        <option>Dormammu
                        </Select>
                        <button><</button>
                        <button>></button><br /><br />
                        Materia: <Select name="estado" class="boton">
                        <option>Matematicas
                        <option>Español
                        <option>Quimica
                        <option>Ciencias Sociales
                        </Select>
                        <button><</button>
                        <button>></button><br />
                      
                        <br />
                        2do Bimestre: <input type="text" />
                        <!--  -->
                        <br />
                        3er Bimestre: <input type="text"/>
                        <!--  -->
                        <br />
                        4to Bimestre: <input type="text"/>
                        <!--  -->
                        <br />
                        5to Bimestre: <input type="text"/>
                        <!--  -->
                        <br />
                        6to Bimestre: <input type="text"/>
                        <!--  -->

                        <label for="text">Comentarios:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" value="Anterior" id="submit" name="submit" class="submit_btn float_l" />
                        <input type="reset" value="Guardar" id="reset" name="reset" class="submit_btn float_r" />
                        <input type="reset" value="Siguiente" id="reset" name="reset" class="submit_btn float_r" />
                        
                </form>

                
            </div>
		</div>
        <div class="half float_r">
        	<h4>Datos del Maestro:</h4>
            <h6><strong>Datos personales</strong></h6>
          		<b>Nombre:</b> Quintana Martinez Nancy Carolina<br />
                <b>Clase: </b> 1°  C<br />                
                <b>Estatus:</b> Activo<br />
          
				
			
            <div class="vertical-menu">
              <a href="#" >Inicio</a>
              <a href="ConsultarAlumnosMaestro.php">Alumnos</a>
              <a href="#" class="active">Registrar calificaciones</a>
              
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
</html>