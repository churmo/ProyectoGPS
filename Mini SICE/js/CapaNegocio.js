


function imprimirAlumno(alumno){
	let concat ="";
	idAlumno = 0;
            concat += "\n NombreCompleto: " + alumno.NombreCompleto
            concat += "\n Nombre: " + alumno.Nombre
            concat += "\n ApellP: " + alumno.ApellP
            concat += "\n ApellM: " + alumno.ApellM
            concat += "\n CicloEscolar: " + alumno.CicloEscolar
            concat += "\n Grado: " + alumno.Grado
            concat += "\n Grupo: " + alumno.Grupo
            concat += "\n CURP: " + alumno.CURP
            concat += "\n Domicilio: " + alumno.Domicilio
            concat += "\n Localidad: " + alumno.Localidad
            concat += "\n Municipio: " + alumno.Municipio
            concat += "\n CodigoPostal: " + alumno.CodigoPostal
            concat += "\n NumeroTelefono: " + alumno.NumeroTelefono
            concat += "\n CorreoElectronico: " + alumno.CorreoElectronico
            concat += "\n Estatus: " + alumno.Estatus
            concat += "\n FechaNacimiento: " + alumno.FechaNacimiento
            concat += "\n FechaInicio: " + alumno.FechaInicio

            alert(concat)
}

function CrearAlumno(){
			idAlumno = 0;
            NombreCompleto=calcularNombreCompleto();
            Nombre = document.getElementById('Nombre').value;
            ApellP = document.getElementById('Apellido Paterno').value;
            ApellM = document.getElementById('Apellido Materno').value;
            CicloEscolar = 2018;
            Grado = document.getElementById('Grado').value;
            Grupo = document.getElementById('Grupo').value;
            CURP = document.getElementById('CURP').value;
            Domicilio = document.getElementById('Domicilio').value;
            Localidad = document.getElementById('Localidad').value;
            Municipio = document.getElementById('Municipio').value;
            CodigoPostal = document.getElementById('Codigo Postal').value;
            NumeroTelefono = document.getElementById('Telefono').value;
            CorreoElectronico = document.getElementById('Correo Electronico').value;
            Estatus = document.getElementById('Estatus').value;
            FechaNacimiento = document.getElementById('Año Nacimiento').value;
            FechaInicio= 2018;
            let alumno = new Alumno(idAlumno, Nombre, ApellP, ApellM, FechaNacimiento, CicloEscolar, Grado, Grupo, CURP, Domicilio, Localidad, Municipio, CodigoPostal, NumeroTelefono, CorreoElectronico, FechaInicio, Estatus); 


            imprimirAlumno(alumno)

}

function Alumno(idAlumno,Nombre,ApellP,ApellM,FechaNacimiento,
                CicloEscolar,Grado,Grupo,   CURP,
                  Domicilio,   Localidad,   Municipio,   CodigoPostal,
                  NumeroTelefono,   CorreoElectronico,
                  FechaInicio,   Estatus)
        {
            this.idAlumno = idAlumno;
            this.NombreCompleto=calcularNombreCompleto();
            this.Nombre = Nombre;
            this.ApellP = ApellP;
            this.ApellM = ApellM;
            this.CicloEscolar = CicloEscolar;
            this.Grado = Grado;
            this.Grupo = Grupo;
            this.CURP = CURP;
            this.Domicilio = Domicilio;
            this.Localidad = Localidad;
            this.Municipio = Municipio;
            this.CodigoPostal = CodigoPostal;
            this.NumeroTelefono = NumeroTelefono;
            this.CorreoElectronico = CorreoElectronico;
            this.Estatus = Estatus;
            this.FechaNacimiento = FechaNacimiento;
            this.FechaInicio=FechaInicio;
            
        }

function calcularNombreCompleto() {
	return document.getElementById('Apellido Paterno').value + " " + document.getElementById('Apellido Materno').value + " " + document.getElementById('Nombre').value;
	
}
