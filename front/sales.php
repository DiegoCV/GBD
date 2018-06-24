


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
                                    
                                        <div class="form-inline" >
                                             <div class="form-group">
                                                <label for="InputCodigoProducto" class="col-sm-3 control-label">Producto</label>     &nbsp;
                                                <div class="col-sm-9">                                                
                                                  <select class="form-control" id="InputCodigoProducto">
                                                      
                                                  </select>
                                                </div>
                                            </div>
                                              
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Cliente</label>
                                                &nbsp;
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="inputCliente">
                                                        
                                                    </select>                                                
                                                </div>
                                            </div>
                                            
                                                   <div class="form-group">
                                                <label class="control-label">Cantidad :</label>
                                                <label id="Cantidad" class="control-label"> 0</label>
                                             
                                            </div>
                                            &nbsp;                                        
                                                      <div class="form-group">
                                                <label class=" control-label">Total :</label>
                                             <label id="total" class="control-label">$ 0</label>
                                            </div>
                                           
                                            <input id="addList" class="btn btn-success waves-effect waves-light m-l-10" value="addList" />

                                            <input type="submit" id="vender" value="vender">
                                                 
                                        </div>
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
                                            <th>Nombre</th>
                                            <th>Codigo</th>
                                            <th>Precio</th>
                                            <th>Categoria</th>
                                            <th>Retirar</th>
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
        getProductos();
        getClientes();
    
        
    });
    $('#addList').click(function(){
        if(contador == 1){
            $('#inputCliente').prop('disabled', 'disabled');
        }
        var cod = $('#InputCodigoProducto').val();
        $.post('../back/outerController/productos/ProductoSelect.php',{
            'cod':cod,
            'contador':contador
        }).done(function( result ){
                $('#listado').html(result);
                contador++;
                total++;
                $('#Cantidad').html(total);
                getTotal();
        });
        
    });

    $('#vender').click(function(){
        var cliente = $('#inputCliente').val();
        $.post('../back/outerController/ventas/VentasInsert.php',{         
            'cliente':cliente
        }).done(function( result ){
            if(result == 'ok'){
                var t = $('#total').text();
                alert('Su total a pagar es: '+t);
                cargarCont('sales.php');
            }else{
                alert('Creo que hay problemas');
            }
            
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
                $('#Cantidad').html( total);
                getTotal();
        });

    }

    function getTotal(){
        $.post('../back/outerController/productos/ProductoTotal.php').
        done(function( result ){       
                $('#total').html('$ '+result);
        });
    }

    function getTotal(){
        $.post('../back/outerController/productos/ProductoTotal.php').
        done(function( result ){       
                $('#total').html('$ '+result);
        });
    }

    function getClientes(){
        $.post('../back/outerController/clientes/ClientesSelect.php').
        done(function( result ){       
                $('#inputCliente').html(result);
        });
    }
    
    function getProductos(){
        $.post('../back/outerController/productos/ProductoOption.php').
        done(function( result ){       
                $('#InputCodigoProducto').html(result);
        });
    }
</script>


