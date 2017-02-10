<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Combustibles | Panel Control</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')!!}
    <!-- Ionicons -->
    {!!Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')!!}
    <!-- Theme style -->
    {!!Html::style('dist/css/AdminLTE.min.css')!!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!!Html::style('dist/css/skins/_all-skins.min.css')!!}
    <!-- iCheck -->
    {!!Html::style('plugins/iCheck/flat/blue.css')!!}
    <!-- Morris chart -->
    {!!Html::style('plugins/morris/morris.css')!!}
    <!-- jvectormap -->
    {!!Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
    <!-- Date Picker -->
    {!!Html::style('plugins/datepicker/datepicker3.css')!!}
    <!-- Daterange picker -->
    {!!Html::style('plugins/daterangepicker/daterangepicker-bs3.css')!!}
    <!-- bootstrap wysihtml5 - text editor -->
    {!!Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Combustibles</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

             

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Administrador</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                   <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  
                    <p>
                      Administrador - Web Developer
                      <small>Member since Nov. 2016</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
             <!--  <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
        <!--   <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENÚ</li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-user text-green"></i>
                <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/usuario/create" ><i class="fa fa-arrow-circle-right"></i>Nuevo Usuario</a></li>
                <li><a href="/usuario"><i class="fa fa-arrow-circle-right"></i>Lista de Usuarios </a></li>
                <li><a href="/usuario"><i class="fa fa-arrow-circle-right"></i>Logeos </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa  fa-industry text-green"></i>
                <span>Proveedores</span>
                <i class="fa fa-angle-left pull-right"></i>
               {{--  <i class="fa fa-angle-left pull-right"></i> --}}
              </a>
              <ul class="treeview-menu">
                <li><a href="/proveedor/create"><i class="fa fa-arrow-circle-right"></i>Nuevo Proveedor</a></li>
                <li><a href="/proveedor"><i class="fa fa-arrow-circle-right"></i>Lista de Proveedores</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-sitemap text-green"></i> <span>Departamentos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Nuevo Departamento</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Lista de Departamentos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user-secret text-green"></i>
                <span>Choferes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/chofer/create"><i class="fa fa-arrow-circle-right"></i>Nuevo Chofer</a></li>
                <li><a href=/chofer><i class="fa fa-arrow-circle-right"></i>Lista de Choferes</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Control Choferes</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-train text-green"></i> <span>Combustibles</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Nuevo Combustible</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Lista de Combustibles</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Vigencia de precios</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-edit text-green"></i> <span>Cargas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Nueva Carga</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Lista de Cargas</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-automobile text-green"></i> <span>Unidades</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Nueva unidad</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Lista de unidades</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Marca Vehiculos</a></li>
              </ul>
            </li>
               <li>
              <a href="#">
                <i class="fa fa-wrench text-green"></i> <span> Mantenimiento Unidades</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Nueva unidad</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Lista de unidades</a></li>
              </ul>
            </li>
         
          
           
            <li class="header">OTROS</li>
            <li><a href="#"><i class="fa fa-circle text-red"></i> <span>Importante</span></a></li>
            <li><a href="#"><i class="fa fa-circle text-yellow"></i> <span>Errores</span></a></li>
            <li><a href="#"><i class="fa fa-circle text-green"></i> <span>Información</span></a></li>
          </ul>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       @yield('content')


      </div><!-- /.content-wrapper -->


      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versión Laravel</b> 5.3
        </div>
        <strong>Copyright &copy; 2017 <a href="#">H. Ayuntamiento de Córdoba.</a></strong> Derechos reservados.
      </footer>

     
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    {!!Html::script('plugins/jQuery/jQuery-2.1.4.min.js')!!}
    <!-- jQuery UI 1.11.4 -->
    {!!Html::script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')!!}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Bootstrap 3.3.5 -->
    {!!Html::script('bootstrap/js/bootstrap.min.js')!!}
   
    <!-- Morris.js charts -->
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')!!}
    {!!Html::script('plugins/morris/morris.min.js')!!}
    <!-- Sparkline -->
    {!!Html::script('plugins/sparkline/jquery.sparkline.min.js')!!}
    <!-- jvectormap -->
    {!!Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
    <!-- jQuery Knob Chart -->
    {!!Html::script('plugins/knob/jquery.knob.js')!!}
    <!-- daterangepicker -->
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')!!}
    {!!Html::script('plugins/daterangepicker/daterangepicker.js')!!}
    <!-- datepicker -->
    {!!Html::script('plugins/datepicker/bootstrap-datepicker.js')!!}
    <!-- Bootstrap WYSIHTML5 -->
    {!!Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
    <!-- Slimscroll -->
    {!!Html::script('plugins/slimScroll/jquery.slimscroll.min.js')!!}
    <!-- FastClick -->
    {!!Html::script('plugins/fastclick/fastclick.min.js')!!}
    <!-- AdminLTE App -->
    {!!Html::script('../../dist/js/app.min.js')!!}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {!!Html::script('dist/js/pages/dashboard.js')!!}
    <!-- AdminLTE for demo purposes -->
    {!!Html::script('../../dist/js/demo.js')!!}

   </body>
</html>
