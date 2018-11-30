using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo
{
    public class Requerimiento
    {
        string nombre { get; set; }
        string tipo { get; set; }
        string complejidad { get; set; }
        string descripcion { get; set; }

        public Requerimiento() { }
        public Requerimiento(String nombre,String tipo, String complejidad,String descripcion)
        {

            this.nombre = nombre;
            this.tipo = tipo;
            this.complejidad = complejidad;
            this.descripcion = descripcion;
        }
        

        

    }
}
