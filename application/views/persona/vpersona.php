
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Agregar nuevo Usuario</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?php echo base_url();?>Cpersona/guardar" method="post">
        <div class="box-body">
          <div class="form-group">
            <label  class="col-sm-3 control-label">DNI</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtDni" maxlength="8">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Nombre</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtNombre" placeholder="Nombre">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-3 control-label">Apellido Paterno</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  name="txtApPaterno" placeholder="Apellido Paterno">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Apellido Materno</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtApMaterno" placeholder="Apellido Materno" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Correo</label>
            <div class="col-sm-9">
              <input type="email"  class="form-control"  name="txtEmail" placeholder="Ingrese su direccion de correo" >
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-3 control-label">Fecha</label>
            <div class="col-sm-9">
              <div  class="input-group date">
                <div  class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              <input type="text" class="form-control pull-right" id="datepicker" name="txtFechaNa">
            </div>
            </div>
          </div>
          
          <div class="form-group">
            <label  class="col-sm-3 control-label">Usuario</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtUsuario" placeholder="Ingrese su nombre de usuario" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Contraseña</label>
            <div class="col-sm-9">
              <input type="password" name="txtClave" class="form-control" placeholder="Ingrese su contraseña"  >
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
