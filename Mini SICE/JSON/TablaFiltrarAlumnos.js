
		function Tabla(categoria,filtrar,nombre){
		Vaciar(nombre)
		}

	function Eliminar(div) {
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

    xmlhttp.open("GET","alumnos.json",true);
    xmlhttp.send();
  }

  function genera_tabla(datos,div) {

  // Obtener la referencia del elemento body
  var body = document.getElementById(div);
 
  // Crea un elemento <table> y un elemento <tbody>
  var tabla   = document.createElement("table");
  var tblBody = document.createElement("tbody");
 
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
 
  // posiciona el <tbody> debajo del elemento <table>
  tabla.appendChild(tblBody);
  // appends <table> into <body>
  body.appendChild(tabla);
  
  actualizarCSS();
}

 

