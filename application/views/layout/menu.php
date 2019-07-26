  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/img/logo.png" class="img-circle" alt="User Image">
          
        </div>
        
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <li class="treeview">
          <a href="<?php echo base_url()?>?/cWelcome">
          <i class="fa fa-user"></i>&nbsp;
            <span>
            <?php if($this->session->userdata('$_emp')):
              echo $this->session->userdata('$_emp'); 
              else: echo 'Usuario';
            endif;?></span>
          </a>
        </li>
        <li class="active treeview">
          <a href="<?php echo base_url()?>?/cAltaVenta">
          <i class="fas fa-briefcase"></i>&nbsp;<span>Dar de alta Venta</span>
          </a>
        </li>
        <?php if($this->session->userdata('$_tipo') && $this->session->userdata('$_tipo') == 99):?>
        <li class="treeview">
          <a href="<?php echo base_url()?>?/cVenta">
          <i class="fa fa-th"></i>&nbsp;
            <span>Ventas</span>
          </a>
        </li>
        <?php endif;?>
        <li class="treeview">
          <a href="<?php echo base_url()?>?/cLogin/cerrarSesion">
          <i class="fas fa-sign-out-alt"></i>&nbsp;
            <span>Cerrar Sesión</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">