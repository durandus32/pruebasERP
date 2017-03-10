<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Eliminar Empresa</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?php echo base_url(); ?>empresa/Cempresa/eliminarDato" method="post">
        <div class="box-body">

          <div class="form-group">
            <label  class="col-sm-3 control-label">Nombre empresa</label>
            <div class="col-sm-9">
              <input  type="text" name="txtNombre" placeholder="Nombre de la empresa" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-9 pull-right">
              <button type="submit" class="btn btn-danger">Borrar</button>
            </div>
          </div>
        </div>



      </form>
    </div>
  </div>
</div>
