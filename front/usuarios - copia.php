<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/dark/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 20:22:17 GMT -->
<head>
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

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>


    <body >
        
        <!-- Begin page -->
        <div id="wrapper">


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

             


                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <button type="button" id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

        

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


         
            
            <!-- MODAL -->
            <div id="dialog" class="modal-block mfp-hide">
                <section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title">Are you sure?</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p>Are you sure that you want to delete this row?</p>
                            </div>
                        </div>

                        <div class="m-t-20">
                            <div class="text-right">
                                <button type="button" id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
                                <button type="button" id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
                            </div>
                        </div>
                    </div>
                    
                </section>
            </div>
            <!-- end Modal -->


        </div>
        <!-- END wrapper -->
    
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

        <script src="assets/js/jquery.app.js"></script>

	    <!-- Examples -->
	    <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	    <script src="assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script> 
	    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
	    <script src="assets/pages/datatables.editable.init.js"></script>
	
	</body>

<!-- Mirrored from moltran.coderthemes.com/dark/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 20:22:22 GMT -->
</html>