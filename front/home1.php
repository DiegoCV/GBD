<?php
session_start();
/**
if (!isset($_SESSION['idADMINISTRADOR']) || $_SESSION['idADMINISTRADOR'] == null || $_SESSION['idADMINISTRADOR'] == "") {
    echo'<script type="text/javascript">
                alert("Inicio de Sesion Requerido");
                window.location="index.html"
                </script>';
}*/
//session_destroy();
$usuario = $_SESSION['idADMINISTRADOR'];
$nombre = $_SESSION['nombre_usuario'];
$tipo = $_SESSION['tipo'];

//   window.location="login.php"

?>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 20:14:59 GMT -->
        <meta charset="utf-8" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">
        
        <!-- Plugin Css-->
        <link rel="stylesheet" href="assets/plugins/magnific-popup/dist/magnific-popup.css">
        <link rel="stylesheet" href="assets/plugins/jquery-datatables-editable/datatables.css">
       <script src="js/jquery-1.11.2.min.js"></script>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>
        <script src="js/Ajax.js" ></script>
    <script src="js/ViewController.js" ></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
 <?php
 include 'header.php';
 ?>

   <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $nombre ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../back/outerController/administrador/logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0"><?php echo $tipo?> </p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="home1.php" class="waves-effect"><i class="md md-home"></i><span> Principal </span></a>
                            </li>

                    
                             <li>
                                <a id="providers" class="waves-effect"><i class="md md-event"></i><span> Proveedores </span></a>
                            </li>

                             <li>
                                <a id="categories" class="waves-effect"><i class="md md-event"></i><span> Categorias </span></a>
                            </li>

                             <li>
                                <a id="vendedor" class="waves-effect"><i class="md md-event"></i><span> Vendedores </span></a>
                            </li>

                            <li>
                                <a id="client" class="waves-effect"><i class="md md-event"></i><span> Clientes </span></a>
                            </li>
                            <li>
                                <a id="products" class="waves-effect"><i class="md md-event"></i><span> Productos </span></a>
                            
                            <li>
                                <a id="sales" class="waves-effect"><i class="md md-event"></i><span> Ventas </span></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                   <section class="full-width pageContent" id="vista">	
	
                        
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Bienvenido !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow bg-info" id="targeta1">
                                    <span class="mini-stat-icon"><i class="ion-social-usd"></i></span>
                                    <div class="mini-stat-info text-right">
                                        Productos
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Revisa tus productos</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bg-purple bx-shadow" id="targeta2">
                                    <span class="mini-stat-icon"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right">
                                        proovedores
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Contactalos
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bg-success bx-shadow" id="targeta3">
                                    <span class="mini-stat-icon"><i class="ion-eye"></i></span>
                                    <div class="mini-stat-info text-right">                                        
                                        Vendedores
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">
                                                Conoce tus vendedores
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bg-primary bx-shadow" id="targeta4">
                                    <span class="mini-stat-icon"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right">
                                        CLientes
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">
                                                Conoce tus clientes   
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->


                        


                   </section>

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
          
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

<script type="text/javascript">
		$('#home').click(function () {
			cargarCont('home1.php');
		});
		$('#providers').click(function () {
			cargarCont('providers.php');
		});
		$('#categories').click(function () {
			cargarCont('categoria.php');
		});
		$('#vendedor').click(function () {
			cargarCont('vendedores.php');
		});
		$('#client').click(function () {
			cargarCont('clientes.php');
		}); 
		$('#products').click(function () {
			cargarCont('productos.php');
		});
		$('#sales').click(function () {
			cargarCont('sales.php');
		});

        $('#targeta1').click(function () {
            cargarCont('productos.php');
        });

        $('#targeta2').click(function () {
            cargarCont('providers.php');
        });
        $('#targeta3').click(function () {
            cargarCont('vendedores.php');
        });
        $('#targeta4').click(function () {
            cargarCont('clientes.php');
        }); 
        
 
 		$('#btn-exit').click(function(){
 			$.post('../back/outerController/administrador/logout.php');
 		});
		function cargarCont( ruta ){
			$( "#vista" ).load( ruta );
		}
//
		$(document).ready(function(){
			var tipo = '<?php echo $tipo ?>';
			if(tipo == 'Administrador'){      
		        $('#sales').hide();
		    }else{
                $('#providers').hide();
                 $('#vendedor').hide();
                   $('#products').hide();
            }
		});
	</script>
    
        <script>
            var resizefunc = [];
        </script>

        
                <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!-- jQuery  -->
   

        <script src="assets/js/jquery.app.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/plugins/moment/moment.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        
        
        <!-- flot Chart -->
        <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- jQuery  -->
        <script src="assets/pages/jquery.todo.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/pages/jquery.chat.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/pages/jquery.dashboard.js"></script>
        
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        
            
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
   
	    <!-- Examples -->
	    <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	    <script src="assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script> 
	    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
	    <script src="assets/pages/datatables.editable.init.js"></script>
	

    
    </body>

<!-- Mirrored from moltran.coderthemes.com/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 20:18:18 GMT -->
</html>