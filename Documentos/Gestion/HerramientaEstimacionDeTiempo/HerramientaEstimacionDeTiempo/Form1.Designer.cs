namespace HerramientaEstimacionDeTiempo
{
    partial class Form1
    {
        /// <summary>
        /// Variable del diseñador necesaria.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén usando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben desechar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido de este método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.dgvListaRequerimientos = new System.Windows.Forms.DataGridView();
            this.tnAgregarNuevo = new System.Windows.Forms.Button();
            this.btnConfiguracion = new System.Windows.Forms.Button();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.btnEditar = new System.Windows.Forms.Button();
            this.groupBox2 = new System.Windows.Forms.GroupBox();
            ((System.ComponentModel.ISupportInitialize)(this.dgvListaRequerimientos)).BeginInit();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // dgvListaRequerimientos
            // 
            this.dgvListaRequerimientos.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvListaRequerimientos.Location = new System.Drawing.Point(16, 17);
            this.dgvListaRequerimientos.Name = "dgvListaRequerimientos";
            this.dgvListaRequerimientos.Size = new System.Drawing.Size(367, 423);
            this.dgvListaRequerimientos.TabIndex = 0;
            // 
            // tnAgregarNuevo
            // 
            this.tnAgregarNuevo.Location = new System.Drawing.Point(250, 446);
            this.tnAgregarNuevo.Name = "tnAgregarNuevo";
            this.tnAgregarNuevo.Size = new System.Drawing.Size(133, 23);
            this.tnAgregarNuevo.TabIndex = 1;
            this.tnAgregarNuevo.Text = "Agregar requerimiento";
            this.tnAgregarNuevo.UseVisualStyleBackColor = true;
            this.tnAgregarNuevo.Click += new System.EventHandler(this.tnAgregarNuevo_Click);
            // 
            // btnConfiguracion
            // 
            this.btnConfiguracion.Location = new System.Drawing.Point(16, 446);
            this.btnConfiguracion.Name = "btnConfiguracion";
            this.btnConfiguracion.Size = new System.Drawing.Size(88, 23);
            this.btnConfiguracion.TabIndex = 2;
            this.btnConfiguracion.Text = "Configuracion";
            this.btnConfiguracion.UseVisualStyleBackColor = true;
            this.btnConfiguracion.Click += new System.EventHandler(this.btnConfiguracion_Click);
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.btnEditar);
            this.groupBox1.Location = new System.Drawing.Point(389, 17);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(360, 191);
            this.groupBox1.TabIndex = 3;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Descripcion del requerimiento";
            // 
            // btnEditar
            // 
            this.btnEditar.Location = new System.Drawing.Point(288, 162);
            this.btnEditar.Name = "btnEditar";
            this.btnEditar.Size = new System.Drawing.Size(66, 23);
            this.btnEditar.TabIndex = 5;
            this.btnEditar.Text = "Editar";
            this.btnEditar.UseVisualStyleBackColor = true;
            // 
            // groupBox2
            // 
            this.groupBox2.Location = new System.Drawing.Point(389, 249);
            this.groupBox2.Name = "groupBox2";
            this.groupBox2.Size = new System.Drawing.Size(360, 191);
            this.groupBox2.TabIndex = 4;
            this.groupBox2.TabStop = false;
            this.groupBox2.Text = "Descripcion del proyecto";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(761, 487);
            this.Controls.Add(this.groupBox2);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.btnConfiguracion);
            this.Controls.Add(this.tnAgregarNuevo);
            this.Controls.Add(this.dgvListaRequerimientos);
            this.Name = "Form1";
            this.Text = "Form1";
            ((System.ComponentModel.ISupportInitialize)(this.dgvListaRequerimientos)).EndInit();
            this.groupBox1.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.DataGridView dgvListaRequerimientos;
        private System.Windows.Forms.Button tnAgregarNuevo;
        private System.Windows.Forms.Button btnConfiguracion;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.GroupBox groupBox2;
        private System.Windows.Forms.Button btnEditar;
    }
}

