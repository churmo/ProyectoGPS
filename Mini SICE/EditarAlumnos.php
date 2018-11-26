<?php
session_start();
 $id=$_GET['idAlumnos']; ?>

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

<script type="text/javascript" src="js/ValidacionesEditar.js"></script>
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
        <div class="half float_l" >
        <h4><center>Quintana Martinez Nancy Carolina </center></h4>
        
            <p><b>Ciclo Escolar:</b> Febrero 2018 - Diciembre 2018 <br />
            <b>Grupo:</b> 1° C</p>
            <div id="contact_form_Alumno">
              
                
                    Apellido Paterno: <input type="text" id="AP" name="Apellido_Paterno" onchange="validarTexto(this.id)"  ><br />
                    Apellido Materno: <input type="text" id="AM"  name="Apellido_Materno" onchange="validarTexto(this.id)"><br />
                    Nombre: <input type="text" id="N" style="width: 240px" name="Nombre" onchange="validarTexto(this.id)""><br/>
                    fecha de Nacimiento  <Select id="FD" name="FechaDia" class="boton">
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

                        <Select id="FM" name="fechaMes"  class="boton">
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
                        Año: <input type="text" id="Anio"  maxlength="4"  style="width: 50px;" name="Año Nacimiento" onchange="validarNumeros(this.id)" /><br />
                         Grado:  <Select id="G" name="Grado" class="boton" >

                        <option>Primero
                        <option>Segundo
                        <option>Tercero
                        <option>Cuarto
                        <option>Quinto
                        <option>Sexto
                        </Select>
                        Grupo: 
                    <Select  id="Gru" name="Grupo" class="boton" >

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
                    CURP: <input type="text" id="Cu"  maxlength="20"  style="width: 130px; " name="CURP" onchange="validarTextoYNumeros(this.id)" /><br />
                    Domicilio: <input type="text" id="Do" style="width: 260px;" name="Domicilio" onchange="validarDireccion(this.id)"  /><br />
                    Localidad: <input type="text" id="Lo" style="width: 160px;" name="Localidad" onchange="validarTexto(this.id)" /><br />
                    Municipio: <input type="text" id="Mu" style="width: 160px;" name="Municipio" onchange="validarTexto(this.id)" /><br />
                    Codigo Postal: <input type="text" id="CP" maxlength="5"  style="width: 60px;" name="Codigo_Postal" onchange="validarNumeros(this.id)" />
                    Telefono: <input type="text" id="Te" style="width: 160px;" name="Telefono" onchange="validarTelefono(this.id)" />   <br />   
                    Correo Electronico: <input type="text" id="CE" style="width: 250px;" name="Correo_Electronico" onchange="validarMail(this.id)" /><br />              
                    Estatus:<Select id="Sta" name="Estatus" class="boton" >

                        <option>Activo
                        <option>Baja
                        <option>Baja Temporal
                        <option>Egresado
                        
                        </Select>
                
                        
                        
                        <div class="cleaner h10"></div>
                        
                       <center>
                       <button onclick="EditarAlumno(<?php echo $id ?>)">Guardar</button>
                       </center>
                       <script>
                           function EditarAlumno(id){

                            if (confirm('¿Estas seguro que deseas guardar cambios? ')) {
                                
                var AP = document.getElementById("AP").value;
                var AM = document.getElementById("AM").value;
                var N = document.getElementById("N").value;
                var Anio = document.getElementById("Anio").value;
                var Cu = document.getElementById("Cu").value;
                var Do = document.getElementById("Do").value;
                var Lo = document.getElementById("Lo").value;
                var Mu = document.getElementById("Mu").value;
                var CP = document.getElementById("CP").value;
                var Te = document.getElementById("Te").value;
                var CE = document.getElementById("CE").value;
                var FD = document.getElementById("FD").options[document.getElementById("FD").selectedIndex].value;
                var FM = document.getElementById("FM").options[document.getElementById("FM").selectedIndex].index;
                var G = document.getElementById("G").options[document.getElementById("G").selectedIndex].value;
                var Gru = document.getElementById("Gru").options[document.getElementById("Gru").selectedIndex].value;
                var Sta = document.getElementById("Sta").options[document.getElementById("Sta").selectedIndex].value;
                var Fecha = Anio+"-"+(FM+1)+"-"+FD;




                
                            location.href="Actualizar.php?idAlumnos="+id+"&AP="+AP+"&AM="+AM+"&N="+N+"&G="+G+"&Gru="+Gru+"&Cu="+Cu+"&Lo="+Lo+"&Mu="+Mu+"&CP="+CP+"&Te="+Te+"&CE="+CE+"&Sta="+Sta+"&Fecha="+Fecha+"&Do="+Do;

                        }
                           }
                       </script>
                        <!-- <input type="button" value="Guardar" name="GuardarAlumno"  class="submit_btn float_r" /> -->
                        
                        
                

                
            </div>
		</div>
        <div class="half float_r">
        	
          <h4>  <b></b> <?php echo $_SESSION["Nombre"] ?><br /></h4>
          	
               
				
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
        
    
    	<div class="cleaner" ></div>
    
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
<script>
    if (<?php echo $id; ?>!=-1) {
        
        xmlhttp= new XMLHttpRequest();
        id=<?php echo $id; ?>;
    xmlhttp.onreadystatechange = function(){
      if (xmlhttp.readyState=== 4 && xmlhttp.status===200) {
        var datos = JSON.parse(xmlhttp.responseText);
        console.log(datos);
         for(var obj in datos){

          if (datos[obj].idAlumnos==id) {
            document.getElementById("AP").value=datos[obj]["Apellido Paterno"];
            document.getElementById("AM").value=datos[obj]["Apellido Materno"];
            document.getElementById("N").value=datos[obj]["Nombre"];
            document.getElementById("Anio").value=datos[obj]["Fecha_De_Nacimiento"].substring(0,4);
            document.getElementById("Cu").value=datos[obj].CURP;
            document.getElementById("Do").value=datos[obj]["Domicilio"];
            document.getElementById("Lo").value=datos[obj]["Localidad"];
            document.getElementById("Mu").value=datos[obj]["Municipio"];
            document.getElementById("CP").value=datos[obj]["CodigoPostal"];
            document.getElementById("Te").value=datos[obj]["numeroTelefono"];
            document.getElementById("CE").value=datos[obj]["CorreoElectronico"];

            var j = parseInt(datos[obj]["Fecha_De_Nacimiento"].substring(8,10));
             
            var combo = document.getElementById("FD");
            combo[j-1].selected=true;
            
             var i = parseInt(datos[obj]["Fecha_De_Nacimiento"].substring(5,7));
             
            var combo = document.getElementById("FM");
             combo[i-1].selected=true;
            

            var combo = document.getElementById("G");
             combo.options[combo.selectedIndex].value=datos[obj]["Grado"];
            

            var combo = document.getElementById("Gru");
             combo.options[combo.selectedIndex].value=datos[obj]["Grupo"];

            

            var combo = document.getElementById("Sta");
             combo.options[combo.selectedIndex].value=datos[obj]["Estatus"];
             
            // document.getElementById('nombre').innerHTML=datos[obj].Nombre + " " + datos[obj]["Apellido Paterno"] + " " + datos[obj]["Apellido Materno"] ;
            // document.getElementById('FechaDeNacimiento').innerHTML=datos[obj]["Fecha_De_Nacimiento"];
            // document.getElementById('Grado').innerHTML=datos[obj].Grado;
            // document.getElementById('Grupo').innerHTML=datos[obj].Grupo;
            // document.getElementById('Curp').innerHTML=datos[obj].CURP;
            // document.getElementById('Domicilio').innerHTML=datos[obj].Domicilio;
            // document.getElementById('Localidad').innerHTML=datos[obj].Localidad;
            // document.getElementById('Municipio').innerHTML=datos[obj].Municipio;
            // document.getElementById('CodigoPostal').innerHTML=datos[obj].CodigoPostal;
            // document.getElementById('NumeroTelefono').innerHTML=datos[obj].numeroTelefono;
            // document.getElementById('Correo').innerHTML=datos[obj].CorreoElectronico;
            // document.getElementById('Estatus').innerHTML=datos[obj].Estatus;

          }
         }

      }
    }

    xmlhttp.open("GET","alumnos.json",true);
    xmlhttp.send();


    
    }
</script>