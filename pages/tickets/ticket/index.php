<?php 
  require_once('../../../app/parking.php');
  date_default_timezone_set("America/Guayaquil");
  $espacios = consultar("espacio"); 
  $espaciosVacios = consultarGeneral("espacio","estado_espacio","=","LIBRE");
  // $fechaActual= getdate ();
  // $fecha = $fechaActual["year"]."-".$fechaActual["mon"]."-".$fechaActual["mday"];
  // $hora = $fechaActual["hours"].":".$fechaActual["minutes"];
  $fecha = date("Y")."-".date("m")."-".date("d")." ".date("G").":".date("i").":".date("s");
  $hora = date("G").":".date("i").":".date("s");
  $usuario="Jonella Zhapan";
  $alias = "TATTY";
  //echo $fecha; echo $hora;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Oro Mall | Web PARKING</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../../plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../../plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../../../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../../plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">
    <!-- Tablecloth 
    <link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="tablecloth/tablecloth.js"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .espacios:hover {
        background-color: #ff5000;
      }
      .espacios{
        display: inline-block;
        vertical-align: top;
        width: 50px;
        text-align: center;
        background-color: #39cccc;
        border: 1px solid #fff;
        color: #fff;
        cursor: pointer;
        padding: 10px 5px;
      }
      .celeste{
        background-color: #39cccc;
      }
      .naranja{
        background-color: #ff5000;
      }
    </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../../index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- <span class="logo-mini"><b>A</b>LT</span> -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Web</b>PARKING</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../../dist/img/avatar2.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $usuario; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="./../dist/img/avatar2.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $usuario; ?> - Web Developer
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../../dist/img/avatar2.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $usuario; ?> </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPAL</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Tablero</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="../../../index.html"><i class="fa fa-circle-o"></i> Tablero</a></li>
                <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Tickets</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Registrar Ticket</a></li>
                <li><a href="../../tickets/liberar/"><i class="fa fa-circle-o"></i> Liberar Espacio</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Reportes</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Historial</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i> <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../usuario/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li><a href="../usuario/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="../usuario/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <!-- <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li> -->
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Ticket de parqueo
            <small>Registro</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="#">Tickets</a></li>
            <li class="active">Registrar Ticket</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Seleccione el espacio de parqueo</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <table cellspacing="0" cellpadding="0">     
                  <tr>        
                  <?php while ($espacio = mysql_fetch_array($espaciosVacios)) {?>
                    <th class="espacios" valor="<?php echo $espacio["nombre_espacio"]; ?>"><?php echo $espacio["nombre_espacio"]; ?></th>
                  <?php } ?>

                  
                    <!-- <th>Title</th>
                    <th>Title</th>
                    <th>Title</th>
                    <th>Title</th> -->
                  </tr>
                </table>
              </div><!-- /.row -->
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Fecha y Hora</h3>
                </div>
                <div class="box-body">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Fecha:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask disabled value="<?php echo $fecha; ?>">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <!-- time Picker -->
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Hora:</label>
                      <div class="input-group">
                        <input type="text" class="form-control timepicker" disabled value="<?php echo $hora; ?>">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                  </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Ingrese lo Datos</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form action="registrarTicket.php" method=GET role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Numero de espacio</label>
                      <input id="numeroEspacio" name="nespacio" type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Placa del vehiculo</label>
                      <input id="placaVehiculo" name="placa" type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Usuario</label>
                      <input id="idUsuario" name="nombreUsuario" type="text" class="form-control" placeholder="Enter ..." value="<?php echo $alias; ?>">
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                      <label>fecha</label>
                      <input id="idFecha" name="fechaRegistro" type="text" class="form-control" placeholder="Enter ..." value="<?php echo $fecha; ?>">
                    </div>
                    <!-- button -->
                    <div class="box-footer">
                      <button id="guardar" type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div><!-- /.box -->
              </div><!-- /.box-body -->
              <!-- save box 
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Guardar</h3>
                </div>
                <div class="box-body">
                  <div class="box-footer">
                    <button id="guardar" type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div> /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->  
          </div> <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015 <a href="#">ORO MALL | Web PARKING</a>.</strong> All rights reserved.
      </footer>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="../../../plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../../../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../../../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      // $(function () {
      //   //Initialize Select2 Elements
      //   $(".select2").select2();

      //   //Datemask dd/mm/yyyy
      //   $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
      //   //Datemask2 mm/dd/yyyy
      //   $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
      //   //Money Euro
      //   $("[data-mask]").inputmask();

      //   //Date range picker
      //   $('#reservation').daterangepicker();
      //   //Date range picker with time picker
      //   $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
      //   //Date range as a button
      //   $('#daterange-btn').daterangepicker(
      //       {
      //         ranges: {
      //           'Today': [moment(), moment()],
      //           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      //           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
      //           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      //           'This Month': [moment().startOf('month'), moment().endOf('month')],
      //           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      //         },
      //         startDate: moment().subtract(29, 'days'),
      //         endDate: moment()
      //       },
      //   function (start, end) {
      //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      //   }
      //   );

      //   //iCheck for checkbox and radio inputs
      //   $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      //     checkboxClass: 'icheckbox_minimal-blue',
      //     radioClass: 'iradio_minimal-blue'
      //   });
      //   //Red color scheme for iCheck
      //   $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      //     checkboxClass: 'icheckbox_minimal-red',
      //     radioClass: 'iradio_minimal-red'
      //   });
      //   //Flat red color scheme for iCheck
      //   $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      //     checkboxClass: 'icheckbox_flat-green',
      //     radioClass: 'iradio_flat-green'
      //   });

      //   //Colorpicker
      //   $(".my-colorpicker1").colorpicker();
      //   //color picker with addon
      //   $(".my-colorpicker2").colorpicker();

      //   //Timepicker
      //   // $(".timepicker").timepicker({
      //   //   showInputs: false
      //   // });
      // });
    </script>
    <script type="text/javascript">
      $(document).on("ready",function(){

        $('th').click(function(){
            
            removerClase('th', 'celeste');
            removerClase('th', 'naranja');
            var clase=$(this).attr('class');
            var valor=$(this).attr('valor');

            if (clase=='espacios naranja') {
              $(this).addClass('celeste').removeClass('naranja');
              //update espacio=reservado
              
            }
            else{
              $(this).addClass('naranja').removeClass('celeste');
              //update espacio=libre

            };
            document.getElementById("numeroEspacio").value = valor;
            alert(clase+" "+valor);
        });

        function removerClase(tag, clase){
          $(tag).removeClass(clase);
        }

        $('button').click(function(){
            alert("click");
        });
      });
    </script>
  </body>
</html>
