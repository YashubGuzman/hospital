<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registro de usuario</title> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="plugins/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/dist/css/skins/skin-green.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
          <script src="plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="plugins/morris/raphael-min.js"></script>
<script src="plugins/morris/morris.js"></script>
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/morris/example.css">
          <script src="plugins/jspdf/jspdf.min.js"></script>
          <script src="plugins/jspdf/jspdf.plugin.autotable.js"></script>
          <?php if(isset($_GET["view"]) && $_GET["view"]=="sell"):?>
<script type="text/javascript" src="plugins/jsqrcode/llqrcode.js"></script>
<script type="text/javascript" src="plugins/jsqrcode/webqr.js"></script>
          <?php endif;?>

  </head>

  <body class="login-page" >


<div class="login-box">
      <div class="login-logo">
        <a><b>HOSPITAL</b></a>
      </div><!-- /.login-logo -->
      
      <div class="login-box-body">
        <form action="addexterno.php" method="post">
          
        <div class="form-group has-feedback">
            <input type="text" name="nombre" autofocus required class="form-control" placeholder="Nombre"/>
          </div>

          <div class="form-group has-feedback">
            <input type="text" name="apellidos" autofocus required class="form-control" placeholder="Apellidos"/>
          </div>

          <div class="form-group has-feedback">
            <input type="text" name="username" autofocus required class="form-control" placeholder="Nombre de usuario"/>
          </div>

          <div class="form-group has-feedback">
            <input type="text" name="email" autofocus required class="form-control" placeholder="Email"/>
          </div>
          
          <div class="form-group has-feedback">
            <input type="password" name="password" required class="form-control" placeholder="Contraseña"/>
          </div>

          <div class="form-group has-feedback">
          <input type="date" name="fecha_nac" class="form-control" id="fecha_nac" placeholder="Fecha de nacimiento">
          </div>

          
          <div class="row">
            

            <div class="col-xs-12">
            <button type="submit" class="btn btn-warning btn-block btn-flat">Registrar</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->  
    


    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="plugins/dist/js/app.min.js" type="text/javascript"></script>

    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".datatable").DataTable({
          "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
        });
      });
    </script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
</html>

