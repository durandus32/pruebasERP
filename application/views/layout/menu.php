
<aside style="position:fixed" class="main-sidebar" >
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar ">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('s_usuario') ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Persona</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo base_url();?>Cpersona"><i class="fa fa-circle-o"></i> Agregar Persona</a></li>
          <li><a href="<?php echo base_url();?>Cdelpersona"><i class="fa fa-circle-o"></i> Eliminar</a></li>
        </ul>
      </li>

      <li class="sidebar-menu">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Empresas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url();?>empresa/Cempresa"><i class="fa fa-circle-o"></i> Agregar empresa</a></li>
          <li><a href="<?php echo base_url();?>empresa/Cupdempresa"><i class="fa fa-circle-o"></i> Actualizar informacion</a></li>
          <li><a href="<?php echo base_url();?>empresa/Cmosempresa"><i class="fa fa-circle-o"></i> Empresas registradas</a></li>
          <li><a href="<?php echo base_url();?>empresa/Cdelempresa"><i class="fa fa-circle-o"></i> Eliminar</a></li>
        </ul>
      </li>


      <li class="sidebar-menu">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Clientes</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url();?>cliente/Ccliente"><i class="fa fa-circle-o"></i> Nuevo cliente</a></li>
          <li><a href="<?php echo base_url();?>cliente/Cupdcliente"><i class="fa fa-circle-o"></i> Actualizar informacion</a></li>
          <li><a href="<?php echo base_url();?>"><i class="fa fa-circle-o"></i> Clientes registradas</a></li>
          <li><a href="<?php echo base_url();?>cliente/Cdelcliente"><i class="fa fa-circle-o"></i> Eliminar</a></li>
        </ul>
      </li>


      <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>

  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="content">
<div class="cont_pading">
