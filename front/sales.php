


    <body >
        
        <!-- Begin page -->
        <div id="wrapper">

            
            

            <!-- =================== =========================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

             <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Inline Form</h3></div>
                                    <div class="panel-body">
                                    
                                        <form class="form-inline" role="form">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Producto</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                              
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  id="InputCodigoProducto" class="form-control" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            
                                                   <div class="form-group">
                                                <label for="inputEmail3" class="control-label">Cantidad :</label>
                                                <label for="inputEmail3" class="control-label">$ 0</label>
                                             
                                            </div>
                                            &nbsp;
                                            &nbsp;
                                                      <div class="form-group">
                                                <label for="inputEmail3" class=" control-label">Total :</label>
                                             <label for="inputEmail3" class="control-label">$ 0</label>
                                            </div>
                                            
                                            <input id="addList" class="btn btn-success waves-effect waves-light m-l-10" value="addList" />
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                             
                        </div>


                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        
                                    </div>
                                </div>
                                <table class="table table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listado">
                                        
                                      
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

	</body>
    <script type="text/javascript">
    var contador = 1;
    var total = 0;
    $(document).ready(function () {

    
        
    });
    $('#addList').click(function(){
        var cod = $('#InputCodigoProducto').val();
        $.post('../back/outerController/productos/ProductoSelect.php',{
            'cod':cod,
            'contador':contador
        }).done(function( result ){
                $('#listado').html(result);
                contador++;
                total++;
                $('#Cantidad').val(total);
        });
        


    });
function retirarProducto(cont){     
        //alert(cont);//
        $.post('../back/outerController/productos/ProductoRemove.php',{         
            'contador':cont
        }).done(function( result ){
        //alert(result);                
                $('#listado').html(result);
                total--;
                $('#Cantidad').val(total);
        });

    }
    
</script>


