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
                                    
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Modelo:</label>
                                            <input class="form-control" name="modelo" placeholder="Modelo del Producto" value="<?php echo $producto['modelo'] ?>"  disabled>
                                        </div>
                                    </div>





                                    <div class="col-lg-1"></div>





                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Tipo de producto:</label>
                                            <input name="tipo" id="tipo" class="form-control" value="<?php echo $nombre['nombre'] ?>" disabled>                                 
                                        </div>
                                    </div>










                                 <div class="col-lg-2"></div>

                                 <div class="col-lg-2">
                                        <label>Precio:</label>
                                        <div class="form-group input-group">

                                            <span class="input-group-addon">$</span>
                                            <?php
                                            $precio = $producto['precio'];
                                            $precio=explode(".",$precio);
                                            ?>
                                            <input id='campo' name="precio" type="text" value="<?php echo $precio[0]; ?>" class="form-control precio" disabled>
                                            <span class="input-group-addon">
                                            <?php if(isset($precio[1])):echo '.' . $precio[1];else:echo '.00'; endif; ?>
                                            </span>
                                        </div>

                                </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                           <label>Descripcion:</label>
                                            <input name="descripcion" value="<?php echo set_value('descripcion') ?>" class="form-control" placeholder="Descripción del Producto" disabled>
                                            
                                        </div>
                                    </div>

                                  


                                 
                              <div class="row">   
                                        <div class="col-lg-8">
                                            <div class="form-group" id="dpzone" style="width:1000px;display: none;">
                                                    
                                            </div>  
                                            
                                        </div>
                             </div>      

                            </div>
                            <!-- .row -->

                            <div class="form-group">
                                         <div class="col-lg-5">
                                            <a class="fancybox btn-default btn pull-right" href="#dpzone" title="Imagenes del modelo <?php echo $producto['modelo']; ?>"  id="actImg">Agregar Imagen(es)</a>
                                        </div>   
                                        <div class="col-lg-6">
                                           
                                        </div>
                                         <div class="col-lg-1">
                                             <input type="button" class="btn-default btn pull-right" id="salir" value="Salir" onclick="window.location.href='index.php/admin/altaproducto'" />
                                        </div>

                            </div>




                            </div>
                            <!-- .row -->

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
      <script src="js/jquery.fancybox.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script src="js/dropzone.js"> </script>

<script>

 $("#dpzone").append("<label>Imagen(es):</label><div class='dropzone sombreado2' id='dropzone'>");
 
 $("#dropzone").dropzone({
    url: "index.php/admin/upload_server/<?php echo $producto['idproducto']; ?>/1",
    dictResponseError: "Ha ocurrido un error en el server",
    acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF',
    addRemoveLinks: false,
    maxFiles: 5,
    parallelUploads: 5,
    maxFileSize: 1000,
    method: "post",
    autoProcessQueue: true
 });

  $('.fancybox').fancybox();



</script>
        

</body>
