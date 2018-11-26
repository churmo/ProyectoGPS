//
		function cargarDatos(id){
			alert(id);
		}
		function estaVacio(id){
		return (document.getElementById(id).value.length == 0)
			
		}
		function validarTexto(id){
			
			var plant =/[A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-]$/;
			
			
			var cadena = document.getElementById(id).value;
			
			if (cadena.match(plant)) {
			
			document.getElementById(id).style.border= "none";

			document.getElementById(id).style.borderBottom="1px solid #FADA02";
			}else{
			//alert("El valor: " + cadena + "no es valido para " + id )
			
			//document.getElementById(id).focus()
			document.getElementById(id).style.border= "1px solid red";
			}
		}

		function validarMail(id){
			var plant =/[A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-]$/
			var cadena = document.getElementById(id).value
			
			if (cadena.match(plant)) {
			document.getElementById(id).style.border= "none";
			document.getElementById(id).style.borderBottom="1px solid #FADA02";
			}else{
			//alert("El valor: " + cadena + "no es valido para " + id )
			
			//document.getElementById(id).focus()
			document.getElementById(id).style.border= "1px solid red";
			}
		}

		function validarNumeros(id){
			var plant =/[0-9]+$/
			var cadena = document.getElementById(id).value
			
			if (cadena.match(plant)) {
			document.getElementById(id).style.border= "none";
			document.getElementById(id).style.borderBottom="1px solid #FADA02";
			}else{
			//alert("El valor: " + cadena + "no es valido para " + id )
			
			//document.getElementById(id).focus()
			document.getElementById(id).style.border= "1px solid red";
			}
		}

		function validarTelefono(id){
			var plant =/[0-9]+$/
			var cadena = document.getElementById(id).value
			
			if (cadena.match(plant)) {
			document.getElementById(id).style.border= "none";
			document.getElementById(id).style.borderBottom="1px solid #FADA02";
			}else{
			//alert("El valor: " + cadena + "no es valido para " + id )
			
			//document.getElementById(id).focus()
			document.getElementById(id).style.border= "1px solid red";
			}
		}

		function validarFecha(id){
			var plant =/^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[0-2])\1\d{4}$/
			var cadena = document.getElementById(id).value
			
			if (cadena.match(plant)) {
			document.getElementById(id).style.border= "none";
			document.getElementById(id).style.borderBottom="1px solid #FADA02";
			}else{
			//alert("El valor: " + cadena + "no es valido para " + id )
			
			//document.getElementById(id).focus()
			document.getElementById(id).style.border= "1px solid red";
			}
		}

		function validarDireccion(id){
			var plant =/[A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-](#[1-9]{1}[0-9]*)?$/
			var cadena = document.getElementById(id).value
			
			if (cadena.match(plant)) {
			document.getElementById(id).style.border= "none";
			document.getElementById(id).style.borderBottom="1px solid #FADA02";
			}else{
			//alert("El valor: " + cadena + "no es valido para " + id )
			
			//document.getElementById(id).focus()
			document.getElementById(id).style.border= "1px solid red";
			}
		}

		function validarTextoYNumeros(id){
			var plant =/[A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-]?$/
			var cadena = document.getElementById(id).value
			
			if (cadena.match(plant)) {
			document.getElementById(id).style.border= "none";
			document.getElementById(id).style.borderBottom="1px solid #FADA02";
			}else{
			//alert("El valor: " + cadena + "no es valido para " + id )
			
			//document.getElementById(id).focus()
			document.getElementById(id).style.border= "1px solid red";
			}
		}

		function validarRadioButtons(familia){
			alert(document.getElementsByName(familia)[0].value+" "+familia)
			for (var i = 0 - 1; i < document.getElementsByName(familia).Length; i++) {
				
			}
			
		}

		function validarTodo(familia){
			
			let error=false;
			
			for (var i = document.getElementsByName(familia).length - 1; i >= 0; i--) {
				if (estaVacio(document.getElementsByName(familia)[0].id) | document.getElementsByName(familia)[i].style.border=="1px solid red"){
					error=true
				}
			}
			
			if (!error) {
				CrearAlumno();
			}else{
				alert("porfavor ingresa datos validos")
			}
		}

	