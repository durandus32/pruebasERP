<div class="row">
  <div class="col-md-8 col-md-offset-2" >
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Actualizar informacion de Usuario</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?php echo base_url();?>Cpersona/actualizarDatos" method="post">
        <div class="box-body">

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
            <label  class="col-sm-3 control-label">Apellido materno</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtApMaterno" placeholder="Apellido Materno" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Correo</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  name="txtEmail" placeholder="Correo" >
            </div>
          </div>


        <!-- /.box-body -->
        <div class="form-group">
<div class="col-sm-9 pull-right">
    <button type="submit" class="btn btn-primary">Actualizar</button>
</div>
  </div>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  </div>


  </div>
