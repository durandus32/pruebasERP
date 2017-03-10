
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Modificar Datos Empresa</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?php echo base_url();?>empresa/Cempresa/actualizarDatos" method="post">
        <div class="box-body">
          <div class="form-group">
            <label  class="col-sm-3 control-label">Nombre</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtNombre" placeholder="Nombre de la empresa">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Direccion</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtDireccion" placeholder="Direccion">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-3 control-label">Telefono</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  name="txtTelefono" placeholder="Numero de telefono">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Direccion de correo</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" name="txtCorreo" placeholder="Direccion de correo electronico" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Codigo postal</label>
            <div class="col-sm-9">
              <input type="text"  class="form-control"  name="txtCp" maxlength="5" placeholder="Ingrese su codigo postal" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-9 pull-right">
            <button type="submit" class="btn btn-primary">Modificar</button>
          </div>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>
