

<?php 
  session_start();
          $id=$_GET["id"];
           $connect = mysqli_connect("localhost", "root", "", "escuela");  
           $sql = "SELECT * from calificaciones c join materias m on c.idMaterias= m.idMaterias where idAlumnos =$id ORDER by m.idMaterias";  
           mysqli_set_charset($connect, 'utf8');
           $result = mysqli_query($connect, $sql);

           $rows = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $rows[] = $row;  
           }  
            
          $json_string =json_encode($rows);
          
          
          $file = 'JsonTemp.json';
          file_put_contents($file, $json_string);
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carousel Theme - Contact Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/CalificacionesAlumno.css" rel="stylesheet" type="text/css" />
<!-- templatemo 358 carousel -->
<!-- 
Carousel Template 
http://www.templatemo.com/preview/templatemo_358_carousel 
-->
<script type="text/javascript" src="js/tablaCalificaciones.js"></script> 

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
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->

<div id="templatemo_main">
	
    <h2>Calificaciones del Alumno</h2>
        <div class="half float_l">
        <h4><center><?php echo $_GET["nombre"]; ?></center></h4>
            
              <b>Maestro:</b>
                <?php 
                
                $mysql = new mysqli("127.0.0.1:3306","root","","escuela");
                $listaUser=$mysql->query("select * from maestros where idMaestros in (select idMaestros from imparten where Anio like '2017' and Grupo like 'b');"); 
                
                
                 $linea = $listaUser-> fetch_row();

                 echo $linea[3]." ".$linea[4]." ".$linea[5];
                 ?> <br />
              <br />

            <div id="tblCalificacionesAlumno">
             
                
                <table >
                <p><br></p>
                <tr bgcolor=#EBEAEA >
                    <td width="30%" bgcolor=#D9D8D8>Materia</td>                  
                    <td width="15%"><center>1</center></td>
                    <td whidt="15%"><center>2</center></td>
                    <td whidt="15%"><center>3</center></td>
                    <td whidt="15%"><center>4</center></td>
                    <td whidt="15%"><center>5</center></td>
                   <td><center>Total</center></td>
                </tr>
                <tr>
                   <td bgcolor=#D9D8D8>Matematicas</td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0.0</center></td> 
                </tr>
                <tr>
                    <td bgcolor=#D9D8D8>Español</td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0.0</center></td>
                </tr>
                <tr>
                    <td bgcolor=#D9D8D8>Quimica</td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0.0</center></td>
                </tr>
                <tr>
                    <td bgcolor=#D9D8D8>Ciencias Sociales</td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0</center></td>
                    <td><center>0.0</center></td>
                </tr></table>
                <label oncanplay ="crearTabla('tblCalificacionesAlumno')"></label>
            </div>
		</div>
        <div class="half float_r">
        	<h4>Datos del alumno:</h4>
          
            <h6><strong>Datos personales</strong></h6>
          		<b>Nombre:</b> <?php echo $_GET["nombre"]; ?> <br />
                <b>Grado:</b> <?php echo $Grad= $_SESSION["obj"]['Grado']; ?> <b>Grupo:</b> <?php echo $Grup = $_SESSION["obj"]['Grupo']; ?><br />
                <b>Maestro:</b>
                <?php 
                
                $mysql = new mysqli("127.0.0.1:3306","root","","escuela");
                $listaUser=$mysql->query("select * from maestros m join imparten i on m.idMaestros=i.idMaestros join materias ma on i.idMaterias=ma.idMaterias where Anio like '%2017%' and Grupo like '$Grup' and grado like '$Grad' group by m.idMaestros "); 
                
               
                foreach ($listaUser as $user ) {
                  echo $user["Nombre"]. " ".$user["ApellidoPaterno"]. " " .$user["ApellidoMaterno"];

                  
                }
                
                 
                 ?> <br />
                
          
				
			<br />
            <div class="vertical-menu">
                <!-- <a class="active" style="height: 0px;padding: 3px;"></a> -->
              
              
              
                <!--<a href="" onclick="myFunction()">Calificaciones</a> -->

                <button onmouseenter="myFunction()" onmouseleave ="drop()" class="active">Calificaciones</button>  
                
                                
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
<script >crearTabla('tblCalificacionesAlumno')</script>