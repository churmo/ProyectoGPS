<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carousel Theme - Contact Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
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
	
    <h2>Registrar Alumno</h2>
        <div class="half float_l">
        <h4><center>Quintana Martinez Nancy Carolina </center></h4>
            <p><b>Ciclo Escolar:</b> Febrero 2018 - Diciembre 2018 <br />
            <b>Grupo:</b> 1° C</p>
            <div id="contact_form_Alumno">
              <form method="post" class="contact_form" name="contact" action="agregarProducto.php" style="width: 400px; margin-left: 40px;">
                
                    Apellido Paterno: <input type="text"  name="Apellido_Paterno" onchange="validarTexto('Apellido Paterno')"  ><br />
                    Apellido Materno: <input type="text"  name="Apellido_Materno" onchange="validarTexto('Apellido Materno')"><br />
                    Nombre: <input type="text"  style="width: 240px" name="Nombre" onchange="validarTexto('Nombre')""><br/>
                    fecha de Nacimiento  <Select name="RegistrarAlumnos" name="FechaDia" class="boton">
                        <option>1
                        <option>2
                        <option>3
                        <option>4
                        <option>5
                        <option>6
                        <option>7
                        <option>8
                        <option>9
                        <option>10
                        <option>11
                        <option>12
                        <option>13
                        <option>14
                        <option>15
                        <option>16
                        <option>17
                        <option>18
                        <option>19
                        <option>20
                        <option>21
                        <option>22
                        <option>23
                        <option>24
                        <option>25
                        <option>26
                        <option>27
                        <option>28
                        <option>29
                        <option>30
                        <option>31
                        </Select>

                        <Select name="fechaMes"  class="boton">
                        <option>Enero
                        <option>Febrero
                        <option>Marzo
                        <option>Abril
                        <option>Mayo
                        <option>Junio
                        <option>Julio
                        <option>Agosto
                        <option>Septiembte
                        <option>Octubre
                        <option>Noviembre
                        <option>Diciembre
                        </Select>
                        Año: <input type="text"  maxlength="4"  style="width: 50px;" name="Año Nacimiento" onchange="validarNumeros('Año Nacimiento')" /><br />
                         Grado:  <Select name="Grado" class="boton" >

                        <option>Primero
                        <option>Segundo
                        <option>Tercero
                        <option>Cuarto
                        <option>Quinto
                        <option>Sexto
                        </Select>
                        Grupo: 
                    <Select name="Grupo" class="boton" >

                        <option>a
                        <option>b
                        <option>c
                        <option>d
                        <option>e
                        <option>f
                        <option>g
                        <option>h
                        <option>i
                        </Select>
                        &nbsp&nbsp
                    CURP: <input type="text"  maxlength="20"  style="width: 130px; " name="CURP" onchange="validarTextoYNumeros('CURP')" /><br />
                    Domicilio: <input type="text" style="width: 260px;" name="Domicilio" onchange="validarDireccion('Domicilio')"  /><br />
                    Localidad: <input type="text"  style="width: 160px;" name="Localidad" onchange="validarTexto('Localidad')" /><br />
                    Municipio: <input type="text"  style="width: 160px;" name="Municipio" onchange="validarTexto('Municipio')" /><br />
                    Codigo Postal: <input type="text" maxlength="5"  style="width: 60px;" name="Codigo_Postal" onchange="validarNumeros('Codigo Postal')" />
                    Telefono: <input type="text" style="width: 160px;" name="Telefono" onchange="validarTelefono('Telefono')" />   <br />   
                    Correo Electronico: <input type="text" style="width: 250px;" name="Correo_Electronico" onchange="validarMail('Correo Electronico')" /><br />              
                    Estatus:<Select name="Estatus" class="boton" >

                        <option>Activo
                        <option>Baja
                        <option>Baja Temporal
                        <option>Egresado
                        
                        </Select>
                
                        
                        
                        <div class="cleaner h10"></div>
                        
                       
                       <button type="submmit"  style="background: none; border: all; border-style: groove; ">Iniciar Sesion</button>
                        <input type="button" value="Guardar" name="GuardarAlumno"  class="submit_btn float_r" />
                        
                        
                </form>

                
            </div>
		</div>
        <div class="half float_r">
        	<h4>Datos del Maestro:</h4>
            <h6><strong>Datos personales</strong></h6>
          		<b>Nombre:</b> Quintana Martinez Nancy Carolina<br />
                <b>Clase: </b> 1°  C<br />                
                <b>Estatus:</b> Activo<br />
          
				
			<br />
            <div class="vertical-menu">
              <a href="#" >Inicio</a>
              <a href="#">Datos del Maestro</a>
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
              <a href="#">Salir</a>
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