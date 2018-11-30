<!DOCTYPE html>
<html>
<head>
  <title>Garden System | Starter</title>
  <?php
    include("views/layout/linkAdmin.php") 
  ?>
</head>

<body class="hold-transition skin-black sidebar-mini" >
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header" >
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini letras"><b>H</b>J</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg letras" >Hotel Jardín</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">  <!-- imagen de 160 x 160 -->
          <img src="recursos/imagenes/plantilla/admin2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrador</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu navbarra" data-widget="tree">
        <li class="header">
          <span class="fa-lg text-olive">Menu Principal</span>
        </li>
        <li class="active">
          <a class="pagina" data-menu="Menu Principal" data-titulo="Inicio" data-control="ControlPrincipal">
            <i class="fa fa-desktop"></i> 
            <span >Inicio</span>
          </a>
        </li>
        <li>   
       
        <li>    
          <a class="pagina" data-menu="Menu Principal" data-titulo="Reservaciones" data-control="ControlReservaciones" >
            <i class="fa fa-calendar-check-o "></i> 
            <span>Reservaciones</span>
          </a>
        </li>  
        <li>
          <a class="pagina" data-menu="Operaciones" data-titulo="Huespedes" data-control="ControlHuespedes">
            <i class="fa fa-users"></i>
            <span>Huespedes</span>
          </a>
        </li>
        <li>    
          <a class="pagina" data-menu="Operaciones" data-titulo="Habitaciones" data-control="ControlHabitaciones" >
            <i class="fa fa-hotel "></i> 
            <span>Habitaciones</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars fa-lg text-aqua"></i>
            <span class="text-olive fa-lg letras2">Administrador</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left text-orange fa-lg pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
            <li>
                <a class="pagina" data-menu="Operaciones" data-titulo="Empleados" data-control="ControlEmpleados">
                  <i class="fa fa-briefcase"></i>
                  <span>Empleados</span>
                </a>
            </li>  
            
             <li>
                <a class="pagina" data-menu="Operaciones" data-titulo="Usuarios" data-control="ControlUsuarios">
                  <i class="fa fa-desktop"></i>
                  <span>Usuarios</span>
                </a>
            </li>  
            <li class="pagina">
                <a class="pagina" data-menu="Operaciones" data-titulo="Promociones" data-control="ControlPromociones">
                  <i class="fa fa-diamond"></i>
                  <span>Promociones</span>
                </a>
            </li>  
            
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars fa-lg text-aqua"></i>
            <span class="text-olive fa-lg letras2">Galerias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left text-orange fa-lg pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
             <li c>
                <a class="pagina" data-menu="Operaciones" data-titulo="AcercaDe" data-control="ControlAcercaDe">
                  <i class="fa fa-info-circle"></i>
                  <span>AcercaDe</span>
                </a>
            </li>  
            
             <li >
                <a class="pagina" data-menu="Operaciones" data-titulo="Slider" data-control="ControlSlider">
                  <i class="fa fa-picture-o"></i>
                  <span>Slider</span>
                </a>
            </li>  
            
            <li >
                <a class="pagina" data-menu="Operaciones" data-titulo="Restaurant" data-control="ControlRestaurant">
                  <i class="fa fa-coffee"></i>
                  <span>Restaurant</span>
                </a>
            </li>  
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper fondo1">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1 class="letras2">
        Inicio
        <small class="letras1">Hotel Jardín</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Opción</li>
        <li class="active">Home</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid fondo">
      <div id="contenido"> 
             <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
  
      </div> 
    
    </section>
    <!-- /.content -->
  <div id="pie">

</div>




</body>
</html>