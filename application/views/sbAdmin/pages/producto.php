<?php 
    $this->load->view('sbAdmin/sections/header'); 

    $this->load->view('sbAdmin/sections/navigation'); 
?>
  <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agregar Producto</h1>
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
                                <form role="form" method="POST" action="index.php/admin/addProduct" id="formulario">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Modelo:</label>
                                            <input class="form-control" name="modelo" placeholder="Modelo del Producto" value="<?php echo set_value('modelo') ?>">
                                            <div class="error">
                                                <?php echo form_error('modelo') ?>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Tipo de producto:</label>
                                            <select name="tipo" id="tipo" class="form-control" value="<?php echo set_value('tipo'); ?>">                             
                                                    <option  value=" " >Seleccione Tipo de Producto..</option>
                                                    <?php foreach ($productos as $key => $producto){?>
                                                    <option  value="<?php echo $producto['idtipo_producto']?>">
                                                        <?php echo $producto['nombre']?>
                                                    </option>
                                                    <?php } ?>
                                            </select>

                                            <div class="error">
                                                <?php echo form_error('tipo') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-10">
                                        <div class="form-group">
                                           <label>Descripcion:</label>
                                            <input name="descripcion" value="<?php echo set_value('descripcion') ?>" class="form-control" placeholder="Descripción del Producto">
                                             <div class="error">
                                                <?php echo form_error('descripcion') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <label>Precio:</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input id='campo' name="precio" type="text" class="form-control precio" value="<?php echo set_value('precio') ?>">
                                            <span class="input-group-addon" id='reflejar'></span>
                                        </div>

                                          <div class="error">
                                                <?php echo form_error('precio') ?>
                                            </div>
                                    </div>                            

                                     <div class="row">
                                        <div class="form-group">
                                            
                                            <div class="col-lg-11">
                                             
                                            <button type="submit" class="pull-right btn btn-default ">Guardar</button>
                                        
                                            </div>
                                      
                                        <div class="col-lg-1">
                                            <button type="reset" class="pull-right btn btn-default " id="reset">Resetear</button>
                                        
                                        </div>
                                        </div>
                                        
                                    </div>
                                    
                                        
                                </form>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">        
                                    </div>
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script src="js/dropzone.js"> </script>

<script>

  
        


$('#tipo').change(function(){
    $('div.error').remove();

});

 $('#campo').click(function(){
        $("#reflejar").removeClass("input-group-addon");
        $("#reflejar").text('');
  });




</script>
        

</body>
