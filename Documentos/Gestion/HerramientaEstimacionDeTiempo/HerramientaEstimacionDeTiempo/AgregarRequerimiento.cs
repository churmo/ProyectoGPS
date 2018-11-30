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
    public partial class AgregarRequerimiento : Form
    {
        public Requerimiento nuevo;
        public AgregarRequerimiento()
        {
            InitializeComponent();
        }

        private void AgregarRequerimiento_Load(object sender, EventArgs e)
        {

        }

        private void btnAgregar_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.OK;
        }

        private void btnCancelar_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.Cancel;
        }
    }
}
