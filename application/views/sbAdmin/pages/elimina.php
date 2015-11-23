<?php 
    $this->load->view('sbAdmin/sections/header'); 

    $this->load->view('sbAdmin/sections/navigation'); 
?>
  <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Eliminar Producto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row sombreado">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Formulario
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" method="POST" action="index.php/admin/deleteProduct" id="formulario">

                                    <div class="col-lg-5">
                                           <div class="form-group">
                                                <label>Escoja el Modelo del Producto a Eliminar:</label>
                                                 <select name="modelo" id="selectmodelo" class="form-control">                   
                                                        <option  value=" " >Seleccione Modelo a Eliminar..</option>
                                                        <?php foreach ($productos as $key => $producto){?>
                                                        <option  value="<?php echo $producto['idproducto']?>">
                                                            <?php echo $producto['modelo']?>
                                                        </option>
                                                        <?php } ?>
                                                  </select>

                                                     <div class="error">
                                                <?php echo form_error('modelo') ?>
                                            </div>
                                            </div>
                                    </div>
                                    

                                     <div class="row">
                                        <div class="col-lg-10">
                                             
                                            <button type="submit" class="pull-right btn btn-default ">Eliminar</button>
                                        
                                        </div>
                                   
                                    
                                    </div>
                                    
                                        
                                </form>
                            </div>                            
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
     </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <script>

    $('#selectmodelo').change(function(){
        $('div.error').remove();

    });
    </script>

        

</body>
