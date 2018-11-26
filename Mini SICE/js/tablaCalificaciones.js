function eliminarTabla(div){
	 // document.getElementById(nombre).deleteRow(i);
         var body = document.getElementById(div);
  		while (body.hasChildNodes()){
            body.removeChild(body.lastChild);
        }
        

}

function crearTabla(div){
	eliminarTabla(div);
      xmlhttp= new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
      if (xmlhttp.readyState=== 4 && xmlhttp.status===200) {
        var datos = JSON.parse(xmlhttp.responseText);
         genera_tabla(div,datos);

      }
    }

    xmlhttp.open("GET","JsonTemp.json",true);
    xmlhttp.send();
  }


function genera_tabla(div,datos){
	console.log(datos);
  // Obtener la referencia del elemento body
  var body = document.getElementById(div);
 
  // Crea un elemento <table> y un elemento <tbody>
  var tabla   = document.createElement("table");
  var tblBody = document.createElement("tbody");
 var hilera = document.createElement("tr");
 var c=0;
     
      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("Materia");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("1");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("2");
      
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("3");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("4");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("5");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);


      var celda = document.createElement("th");
      var textoCelda = document.createTextNode("Total");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    tblBody.appendChild(hilera);

    materias=[];
    for(var i in datos){
    	if (!materias.includes(datos[i].NombreDeMateria)) {
    		materias.push(datos[i].NombreDeMateria);
    	}
    }
    
    var calificaciones = new Array();
		
	
	


    for (var i=0;i<materias.length;i++){
    	var temp = new Array();
    	calificaciones.push(temp);
    	for (var j=0;j<6;j++){
    		calificaciones[i].push(0);
    	}
    }
    
	console.log(calificaciones);

    for(i in datos){
    	
    	calificaciones[materias.indexOf(datos[i].NombreDeMateria)][datos[i].Bimestre-1]=datos[i].Calificacion;
    }
  // Crea las celdas

  for (var i=0;i<materias.length;i++) {
    // Crea las hileras de la tabla
    var hilera = document.createElement("tr");
    
     var celda = document.createElement("td");
      var textoCelda = document.createTextNode(materias[i]);
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    for (var j=0;j<6;j++) {
    	
      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
      // texto sea el contenido de <td>, ubica el elemento <td> al final
      // de la hilera de la tabla      
      var celda = document.createElement("td");
      var textoCelda = document.createTextNode(calificaciones[i][j]);
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
 function actualizarCSS(){

    var links = document.getElementsByTagName("link");
     for (var x in links) {
      var link = links[x]; if (link.getAttribute("type").indexOf("css") > -1) { link.href = link.href + "?id=" + new Date().getMilliseconds(); } }
    
  }

