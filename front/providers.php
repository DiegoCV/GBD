
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
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Actions</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cont">
                                     
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
         
            <!-- end Modal -->
   <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Registro de Proveedores</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                       <form role="form" id="ProveedoresInsert">                                                        
                                                          <div class="form-group">
                                                              <label for="InputNOMBREEMPRESA_PROVEEDORES">NOMBREEMPRESA_PROVEEDORES</label>
                                                              <input type="text" name="NOMBREEMPRESA_PROVEEDORES" class="form-control" id="InputNOMBREEMPRESA_PROVEEDORES" placeholder="NOMBREEMPRESA_PROVEEDORES">
                                                           </div>
                                                          <div class="form-group">
                                                              <label for="InputNOMBREEMPLEADO_PROVEEDORES">NOMBREEMPLEADO_PROVEEDORES</label>
                                                              <input type="text" name="NOMBREEMPLEADO_PROVEEDORES" class="form-control" id="InputNOMBREEMPLEADO_PROVEEDORES" placeholder="NOMBREEMPLEADO_PROVEEDORES">
                                                           </div>
                                                          <div class="form-group">
                                                              <label for="InputDESCUENTO_PROVEEDOR">DESCUENTO_PROVEEDOR</label>
                                                              <input type="text" name="DESCUENTO_PROVEEDOR" class="form-control" id="InputDESCUENTO_PROVEEDOR" placeholder="DESCUENTO_PROVEEDOR">
                                                           </div>
                                                          <div class="form-group">
                                                              <label for="InputFECHAINGRESO_PROVEEDORES">FECHAINGRESO_PROVEEDORES</label>
                                                              <input type="date" name="FECHAINGRESO_PROVEEDORES" class="form-control" id="InputFECHAINGRESO_PROVEEDORES" placeholder="FECHAINGRESO_PROVEEDORES">
                                                           </div>
                                                            <a href="javascript:preProveedoresInsert('ProveedoresInsert')" class="btn btn-warning">Registrar</a>
                                                       </form>    
                                                       
                                                        </div>                                                                                                             
                                                    </div> 
                                                   
                                                    <div class="modal-footer"> 
                                                     <br>
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->
                                        
                                        
                                        
                                  
                                        

        </div>
        </div>
        </div>
            
               
                                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                      ...
                                                      
                                                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                                  
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

	</body>

    <script type="text/javascript">
        $(document).ready(function(){
            cargarProovedores();
        });


        function cargarProovedores(){
            $.post('../back/outerController/proveedores/ProveedoresList.php').done(function(result){
                $('#cont').html(result);
            });
            
        }
    </script>

<!-- Mirrored from moltran.coderthemes.com/dark/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 20:22:22 GMT -->
</html>