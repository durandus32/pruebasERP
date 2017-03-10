
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Agregar Nuevo cliente</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?php echo base_url();?>cliente/Ccliente/actualizarDatos" method="post">
        <div class="box-body">
          <div class="form-group">
            <label  class="col-sm-3 control-label">Nombre</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtNombre" placeholder="Nombre">
            </div>
          </div>

    <!--      <div class="form-group">
            <label  class="col-sm-3 control-label">Nombre empresa</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtNomEmpresa" placeholder="Nombre empresa">
            </div>
          </div> -->
          <div class="form-group">
            <label class="col-sm-3 control-label">Selecciona empresa</label>
            <div class="col-sm-9">
              <select id="cboEmpresa" name="txtEmpresa" class="form-control">
                <option >Elegir Empresa</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Sexo</label>
            <div class="col-sm-9">
              <select name="txtSexo" class="form-control">
                <option value="-">Elegir</option>
                <option value="Masculino">M</option>
                <option value="Femenino">F</option>
              </select>
            </div>
          </div>

  <!--        <div class="form-group">
            <label  class="col-sm-3 control-label">Sexo</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  name="txtSexo" placeholder="Sexo">
            </div>
          </div> -->

          <div class="form-group">
            <label  class="col-sm-3 control-label">Puesto</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtPuesto" placeholder="Puesto" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Departamento</label>
            <div class="col-sm-9">
              <input type="text"  class="form-control"  name="txtDepartamento" placeholder="Departamento" >
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-3 control-label">Telefono</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtTelefono" placeholder="Numero de telefono 1" >
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-3 control-label">Telefono 2</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtTelefono2" placeholder="Numero de telefono 2" >
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-3 control-label">Telefono Celular</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtTelCel" placeholder="Numero de telefono Celular" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Correo</label>
            <div class="col-sm-9">
              <input type="email"  class="form-control"  name="txtCorreo" placeholder="Ingrese su direccion de correo" >
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-9 pull-right">
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  var base_url="<?php echo base_url();?>";
</script>
