using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using Modelo;

namespace HerramientaEstimacionDeTiempo
{
    public partial class Form1 : Form
    {
        List<Requerimiento> listaRequerimientos = new List<Requerimiento>();

        public Form1()
        {
            InitializeComponent();
        }

        private void tnAgregarNuevo_Click(object sender, EventArgs e)
        {
            AgregarRequerimiento ventana = new AgregarRequerimiento();
            ventana.ShowDialog();
            if (ventana.DialogResult == DialogResult.OK)
            {
                this.listaRequerimientos.Add(ventana.nuevo);
                actualizarLista();
            }
            ventana.Dispose();

        }

        public void actualizarLista()
        {
            this.dgvListaRequerimientos.DataSource = null;
            this.dgvListaRequerimientos.DataSource = listaRequerimientos;
        }

        private void btnConfiguracion_Click(object sender, EventArgs e)
        {
            new Configuracion().ShowDialog();
        }
    }
}
