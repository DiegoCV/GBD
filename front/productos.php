
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
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal2">Importar excel <i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>    
                                            <th>Actions</th>                                       
                                            <th>Actions</th>
                                            <th>Actions</th>
                                            <th>Actions</th>
                                            <th>Actions</th>
                                            <th>Actions</th>
                                            <th>Actions</th>
                                            <th>Actions</th>
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
        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Modal Content is Responsive</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                            <form role="form" id="ProductosInsert" method="post" id="ProductosInsert" action="../back/outerController/productos/ProductosInsert.php">
                                                              <div class="form-group">
                                                                  <label for="InputPROVEEDORES_idPROVEEDORES">PROVEEDORES_idPROVEEDORES</label>
                                                                  <select name="PROVEEDORES_idPROVEEDORES" class="form-control" id="InputPROVEEDORES_idPROVEEDORES">
                                                                    
                                                                  </select>
                                                               </div>
                                                              <div class="form-group">
                                                                  <label for="InputNOMBRE_PRODUCTO">NOMBRE_PRODUCTO</label>
                                                                  <input type="text" name="NOMBRE_PRODUCTO" class="form-control" id="InputNOMBRE_PRODUCTO" placeholder="NOMBRE_PRODUCTO">
                                                               </div>
                                                              <div class="form-group">
                                                                  <label for="InputUNIDAD_PRODUCTO">UNIDAD_PRODUCTO</label>
                                                                  <input type="text" name="UNIDAD_PRODUCTO" class="form-control" id="InputUNIDAD_PRODUCTO" placeholder="UNIDAD_PRODUCTO">
                                                               </div>
                                                              <div class="form-group">
                                                                  <label for="InputCOSTO_PRODUCTO">COSTO_PRODUCTO</label>
                                                                  <input type="text" name="COSTO_PRODUCTO" class="form-control" id="InputCOSTO_PRODUCTO" placeholder="COSTO_PRODUCTO">
                                                               </div>
                                                              <div class="form-group">
                                                                  <label for="InputCANTIDAD_PRODUCTO">CANTIDAD_PRODUCTO</label>
                                                                  <input type="text" name="CANTIDAD_PRODUCTO" class="form-control" id="InputCANTIDAD_PRODUCTO" placeholder="CANTIDAD_PRODUCTO">
                                                               </div>
                                                              <div class="form-group">
                                                                  <label for="InputPRECIOVENTA_PRODUCTO">PRECIOVENTA_PRODUCTO</label>
                                                                  <input type="text" name="PRECIOVENTA_PRODUCTO" class="form-control" id="InputPRECIOVENTA_PRODUCTO" placeholder="PRECIOVENTA_PRODUCTO">
                                                               </div>
                                                              <div class="form-group">
                                                                  <label for="InputVALORMINIMO_PRODUCTO">VALORMINIMO_PRODUCTO</label>
                                                                  <input type="text" name="VALORMINIMO_PRODUCTO" class="form-control" id="InputVALORMINIMO_PRODUCTO" placeholder="VALORMINIMO_PRODUCTO">
                                                               </div>
                                                              <div class="form-group">
                                                                  <label for="InputFECHAINGRESO_PRODUCTO">FECHAINGRESO_PRODUCTO</label>
                                                                  <input type="date" name="FECHAINGRESO_PRODUCTO" class="form-control" id="InputFECHAINGRESO_PRODUCTO" placeholder="FECHAINGRESO_PRODUCTO">
                                                               </div>
                                                              <div class="form-group">
                                                                  <label for="InputFECHAVENCIMIENTO_PRODUCTO">FECHAVENCIMIENTO_PRODUCTO</label>
                                                                  <input type="date" name="FECHAVENCIMIENTO_PRODUCTO" class="form-control" id="InputFECHAVENCIMIENTO_PRODUCTO" placeholder="FECHAVENCIMIENTO_PRODUCTO">
                                                               </div>
                                                              <div class="form-group">
                                                                  <label for="InputCATEGORIA_idCATEGORIA">CATEGORIA_idCATEGORIA</label>
                                                                  <select name="CATEGORIA_idCATEGORIA" class="form-control" id="InputCATEGORIA_idCATEGORIA">
                                                                    
                                                                  </select>
                                                               </div>
                                                                <a href="javascript:preProductosInsert('ProductosInsert')" class="btn btn-warning">Registrar</a>
                                                            </form>
                                                        </div> 
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->

               
            <!-- end Modal -->
        </div>

<!-- MODAL -->
<div id="con-close-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
<div class="modal-dialog"> 
<div class="modal-content"> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
<h4 class="modal-title">Cargar todos sus productos desde una hoja de calculo</h4> 
</div> 
<div class="modal-body"> 
<div class="row"> 
    <a href="../back/outerController/productos/getPlantilla.php" class="btn btn-warning">Descargar planilla</a>
    <a href="../back/outerController/productos/getPlantilla.php" class="btn btn-warning">subir planilla</a>
</div> 
<br>
<div class="modal-footer"> 
<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
<button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
</div> 
</div> 
</div>
</div><!-- /.modal -->

</div>   
<!-- end Modal -->
 
<form method="post" action="../back/outerController/productos/setPlantilla.php" enctype="multipart/form-data" id="subida">

<input type="file" name="archivo" id="archivo"></input>

<input type="submit" value="Subir archivo"></input>

</form>
       
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
                    <!-- MODAL -->
         
            <!-- end Modal -->

        </div>
        <!-- END wrapper -->
	
	</body>

    <script type="text/javascript">
        $(document).ready(function(){
            cargarProovedores();
            $.post('../back/outerController/proveedores/ProveedoresOption.php').done(function(result){
         $('#InputPROVEEDORES_idPROVEEDORES').html(result);
    }); 

     $.post('../back/outerController/categoria/CategoriaOption.php').done(function(result){
         $('#InputCATEGORIA_idCATEGORIA').html(result);
    }); 
        });

        function cargarProovedores(){
            $.post('../back/outerController/productos/ProductosList.php').done(function(result){
                $('#cont').html(result);
            });
            
        }

        

        $("#subid").submit(function(e){
          e.preventDefault();
          $.post().done(function(result){
                alert(result);
            });
        });

    </script>

<!-- Mirrored from moltran.coderthemes.com/dark/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 20:22:22 GMT -->
</html>