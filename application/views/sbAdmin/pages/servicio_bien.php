<?php 
    $this->load->view('sbAdmin/sections/header'); 

    $this->load->view('sbAdmin/sections/navigation'); 
?>
  <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agregar Servicio</h1>
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
                                <form role="form" method="POST" action="index.php/admin/addServicio" id="formulario">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control" placeholder="Nombre del Servicio" name="nomservicio" value="<?php echo set_value('nomservicio') ?>" disabled>
                                        </div>
                                        
                                    </div>

                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tipo de servicio:</label>
                                            <input name="tipo" id="tipo" class="form-control" value="<?php echo $nombre['nombre'] ?>" disabled>
                                           
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                           <label>Descripcion:</label>
                                            <input class="form-control" placeholder="Descripción del Servicio" name="desservicio" value="<?php echo set_value('desservicio') ?>" disabled>
                                        </div>
                                       
                                    </div>

                                
                            </div>

                            <div class="row">   
                                        <div class="col-lg-8">
                                            <div class="form-group" id="dpzone" style="width:1000px;display: none;">                                                 

                                          </div>  
                                      </div>
                                    </div>      


                                    <div class="form-group">
                                       <div class="col-lg-5">

                                            <a class="fancybox btn-default btn pull-right" href="#dpzone" title="Imagenes del servicio <?php echo $servicio['nombre']; ?>"  id="actImg">Agregar Imagen(es)</a>

                                        </div>   
                                        <div class="col-lg-6"> </div>
                                        
                                        <div class="col-lg-1">

                                         <input type="button" class="btn-default btn pull-right" id="salir" value="Salir" onclick="window.location.href='index.php/admin/altaservicio'" />

                                        </div>
                                    </div>

                            <div class="row">
                                <div class="col-lg-12">        
                                    </div>
                            </div>
                        
                            </form>
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
<script src="js/jquery.fancybox.js"></script>

<script>
$("#dpzone").append("<label>Imagen(es):</label><div class='dropzone sombreado2' id='dropzone'>");

  $("#dropzone").dropzone({

     url: "index.php/admin/upload_server/<?php echo $servicio['idservicio']; ?>/2",

     dictResponseError: "Ha ocurrido un error en el server",

     autoProcessQueue: true

  });

$('.fancybox').fancybox();
</script>
        

</body>
