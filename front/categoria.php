


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
                                <table class="table table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            
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
                                                            <div class="col-md-12"> 
                                                               <form role="form" id="CategoriaInsert">                                                                  
                                                                 <div class="form-group">
                                                                      <label for="InputNOMBRE_CATEGORIA">NOMBRE_CATEGORIA</label>
                                                                      <input type="text" name="NOMBRE_CATEGORIA" class="form-control" id="InputNOMBRE_CATEGORIA" placeholder="NOMBRE_CATEGORIA">
                                                                   </div>
                                                                    <a href="javascript:preCategoriaInsert('CategoriaInsert')" class="btn btn-warning">Registrar</a>
                                                               </form>
                                                            </div>                                                                                 
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

            
        <!-- END wrapper -->
    
        
        <!-- END wrapper -->
  
	</body>

    <script type="text/javascript">
        $(document).ready(function(){
            cargarProovedores();
        });

        function cargarProovedores(){
            $.post('../back/outerController/categoria/CategoriaList.php').done(function(result){
                $('#cont').html(result);
            });
            
        }
    </script>

<!-- Mirrored from moltran.coderthemes.com/dark/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 20:22:22 GMT -->
</html>