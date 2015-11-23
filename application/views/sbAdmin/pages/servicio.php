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
                                            <input class="form-control" placeholder="Nombre del Servicio" name="nomservicio" value="<?php echo set_value('nomservicio') ?>">
                                        </div>
                                        <div class="error">
                                                <?php echo form_error('nomservicio') ?>
                                        </div>
                                    </div>

                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tipo de servicio:</label>
                                            <select class="form-control" id="tipo" name="tipo">
                                               <option value=" " selected="selected">Seleccione Tipo de Servicio..</option>
                                                    <?php foreach ($servicios as $key => $servicio){?>
                                                    <option value="<?php echo $servicio['idtipo_servicio']?>">
                                                        <?php echo $servicio['nombre']?>
                                                    </option>
                                                    <?php } ?>
                                            </select>
                                            <div class="error">
                                                <?php echo form_error('tipo') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                           <label>Descripcion:</label>
                                            <input class="form-control" placeholder="Descripción del Servicio" name="desservicio" value="<?php echo set_value('desservicio') ?>">
                                        </div>
                                        <div class="error">
                                                <?php echo form_error('desservicio') ?>
                                            </div>
                                    </div>

                                
                            </div>


                            <div class="row">
                                 <div class="col-lg-11">
                                        <button type="submit" class="pull-right btn btn-default " >Guardar</button>
                                    
                                    </div>


                                    <div class="col-lg-1">
                                        <button type="reset" class="pull-right btn btn-default ">Resetear</button>
                                    
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

<script>


$('#tipo').change(function(){
    $('div.error').remove();

});
</script>
        

</body>
