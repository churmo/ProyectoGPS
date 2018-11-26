function genera_tabla_Completa(datos,div) {

  // Obtener la referencia del elemento body
  var body = document.getElementById(div);
 
  // Crea un elemento <table> y un elemento <tbody>
  var tabla   = document.createElement("table");
  var tblBody = document.createElement("tbody");
 var hilera = document.createElement("tr");
 var c=0;
    for (var j in datos[0]) {
      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
      // texto sea el contenido de <td>, ubica el elemento <td> al final
      // de la hilera de la tabla
      var celda = document.createElement("th");
      var textoCelda = document.createTextNode(Object.keys(datos[0])[c++]);
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    }
    tblBody.appendChild(hilera);
  // Crea las celdas
  for (var i in datos) {
    // Crea las hileras de la tabla
    var hilera = document.createElement("tr");
    
    column=Object.keys(datos[i]);
    for (var j in column) {
      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
      // texto sea el contenido de <td>, ubica el elemento <td> al final
      // de la hilera de la tabla
      var celda = document.createElement("td");
      var textoCelda = document.createTextNode(datos[i][column[j]]);
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    }
 
    // agrega la hilera al final de la tabla (al final del elemento tblbody)
    tblBody.appendChild(hilera);
  }
 
  
  
  tabla.appendChild(tblBody);
  // appends <table> into <body>
  body.appendChild(tabla);
  
  
  actualizarCSS();
}


		function Tabla(categoria,filtrar,nombre){
		Vaciar(nombre)
		}

	function TodosLosAlumnos(div) {
        // document.getElementById(nombre).deleteRow(i);
         var body = document.getElementById(div);
  		while (body.hasChildNodes()){
            body.removeChild(body.lastChild);
        }
        tablaDeJson(div);
    }

    
  function tablaDeJson(div){

      xmlhttp= new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
      if (xmlhttp.readyState=== 4 && xmlhttp.status===200) {
        var datos = JSON.parse(xmlhttp.responseText);
         genera_tabla(datos,div);

      }
    }

    xmlhttp.open("GET","JsonTemp.json",true);
    xmlhttp.send();
  }

  function genera_tabla(datos,div) {

  // Obtener la referencia del elemento body
  var body = document.getElementById(div);
 
  // Crea un elemento <table> y un elemento <tbody>
  var tabla   = document.createElement("table");
  var tblBody = document.createElement("tbody");
 var hilera = document.createElement("tr");
 var c=0;
 var solamente=[1,6,7,9,10];

 var typedArr = Uint8Array.of(1,6,7,9,10);
 

    
      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("Nombre");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("Grado");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("Grupo");
      
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("Direccion");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("Localidad");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode(" ");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

    tblBody.appendChild(hilera);
  // Crea las celdas
  for (var i in datos) {
    // Crea las hileras de la tabla
    var hilera = document.createElement("tr");
    
    column=Object.keys(datos[i]);
    for (var j in column) {
      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
      // texto sea el contenido de <td>, ubica el elemento <td> al final
      // de la hilera de la tabla
      
      if (  j==6 || j == 7 || j== 9 || j== 10) {

      var celda = document.createElement("td");
      var textoCelda = document.createTextNode(datos[i][column[j]]);
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
      }else if (j==1) {

        var celda = document.createElement("td");
      var textoCelda = document.createTextNode(datos[i]["Nombre"]+" "+datos[i]["Apellido Paterno"]+" "+datos[i]["Apellido Materno"]);
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
      }
    }

      var celda = document.createElement("td");
      var boton = document.createElement("button");
      boton.type = "button";
      boton.innerText="ver";
      boton.id=i;
      boton.setAttribute( "onclick","CargarDatos("+datos[i].idAlumnos+");");
      
      celda.appendChild(boton);
      hilera.appendChild(celda);
    // agrega la hilera al final de la tabla (al final del elemento tblbody)
    tblBody.appendChild(hilera);
  }
 
  
  
  tabla.appendChild(tblBody);
  // appends <table> into <body>
  body.appendChild(tabla);
  
  
  actualizarCSS();
}



function CargarDatos(id){
  
    document.getElementById("btnEliminar").setAttribute( "name",id);
    document.getElementById("btnEditar").setAttribute( "name",id);
    xmlhttp= new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
      if (xmlhttp.readyState=== 4 && xmlhttp.status===200) {
        var datos = JSON.parse(xmlhttp.responseText);
        console.log(datos);
         for(var obj in datos){
        console.log(datos);
          if (datos[obj].idAlumnos==id) {
              
            document.getElementById('nombre').innerHTML=datos[obj].Nombre + " " + datos[obj]["Apellido Paterno"] + " " + datos[obj]["Apellido Materno"] ;
            document.getElementById('FechaDeNacimiento').innerHTML=datos[obj]["Fecha_De_Nacimiento"];
            document.getElementById('Grado').innerHTML=datos[obj].Grado;
            document.getElementById('Grupo').innerHTML=datos[obj].Grupo;
            document.getElementById('Curp').innerHTML=datos[obj].CURP;
            document.getElementById('Domicilio').innerHTML=datos[obj].Domicilio;
            document.getElementById('Localidad').innerHTML=datos[obj].Localidad;
            document.getElementById('Municipio').innerHTML=datos[obj].Municipio;
            document.getElementById('CodigoPostal').innerHTML=datos[obj].CodigoPostal;
            document.getElementById('NumeroTelefono').innerHTML=datos[obj].numeroTelefono;
            document.getElementById('Correo').innerHTML=datos[obj].CorreoElectronico;
            document.getElementById('Estatus').innerHTML=datos[obj].Estatus;

          }
         }

      }
    }

    xmlhttp.open("GET","alumnos.json",true);
    xmlhttp.send();


    
  }

 function actualizarCSS(){

    var links = document.getElementsByTagName("link");
     for (var x in links) {
      var link = links[x]; if (link.getAttribute("type").indexOf("css") > -1) { link.href = link.href + "?id=" + new Date().getMilliseconds(); } }
    
  }

  function Filtrar(div){

    nombre=document.getElementById("FiltrarNombre").value;
    grado=document.getElementById("FiltrarGrado").value;
    grupo=document.getElementById("FiltrarGrupo").value;
    xmlhttp= new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
      if (xmlhttp.readyState=== 4 && xmlhttp.status===200) {
        var datos = JSON.parse(xmlhttp.responseText);        
        var patt = new RegExp(nombre.toLowerCase());
        var patt2 = new RegExp(grado.toLowerCase());
        var patt3 = new RegExp(grupo.toLowerCase());
         var nuevo = datos.filter(datos => patt.test(datos.Nombre.toLowerCase()+" "+datos["Apellido Paterno"].toLowerCase()+" "+datos["Apellido Materno"].toLowerCase()));

         var nuevo2 = nuevo.filter(nuevo => patt2.test(nuevo.Grado.toLowerCase()));
         
         var nuevo3 = nuevo2.filter(nuevo2 => patt3.test(nuevo2.Grupo.toLowerCase()));
         // console.log(nuevo);
         // console.log(nuevo2);
         // console.log(nuevo3);

         var body = document.getElementById(div);
      while (body.hasChildNodes()){
            body.removeChild(body.lastChild);
        }
        
         genera_tabla(nuevo3,div);
         }

      }

    

    xmlhttp.open("GET","alumnos.json",true);
    xmlhttp.send();

  }
  

