using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace HerramientaEstimacionDeTiempo
{
    public partial class Configuracion : Form
    {
        public Configuracion()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void Configuracion_Load(object sender, EventArgs e)
        {
            cargarDatos();
        }

        private void cargarDatos()
        {
            this.txtCatSimple.Text = HerramientaEstimacionDeTiempo.Properties.Resources.catalogoSimple;
            this.txtCatMedio.Text = HerramientaEstimacionDeTiempo.Properties.Resources.catalogoPromedio;
            this.txtCatComplejo.Text = HerramientaEstimacionDeTiempo.Properties.Resources.catalogoComplejo;

            this.txtCaEsSimple.Text = HerramientaEstimacionDeTiempo.Properties.Resources.casoEspecialSimple;
            this.txtCaEsMedio.Text = HerramientaEstimacionDeTiempo.Properties.Resources.casoEspecialPromedio;
            this.txtCaEsComplejo.Text = HerramientaEstimacionDeTiempo.Properties.Resources.casoEspecialComplejo;

            this.txtRepSimple.Text = HerramientaEstimacionDeTiempo.Properties.Resources.reporteSimple;
            this.txtRepMedio.Text = HerramientaEstimacionDeTiempo.Properties.Resources.reportePromedio;
            this.txtRepMedio.Text = HerramientaEstimacionDeTiempo.Properties.Resources.reporteComplejo;
        }

        private void actualizarDatos()
        {
            try
            {

            }
            catch (Exception)
            {
                MessageBox.Show("hubo un problema con los datos");
                throw;
            }
        }
    }
}
