<?php 
    $this->load->view('sbAdmin/sections/header'); 

    $this->load->view('sbAdmin/sections/navigation'); 
?>
  <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modificar Producto</h1>
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
                                <form role="form" method="POST" action="index.php/admin/updateProduct" id="my-awesome-dropzone">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Modelo:</label>
                                            <input class="form-control" name="modelo" placeholder="Modelo del Producto" value="<?php echo $producto['modelo'] ?>" >
                                             <input id="idproducto"  name="idproducto"  value="<?php echo $producto['idproducto']; ?>" hidden>
                                             <div class="error">
                                                <?php echo form_error('modelo') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-1"></div>

                                    

                                   
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Tipo de producto:</label>
                                            <select name="tipo" id="tipo" class="form-control" value="<?php echo set_value('tipo'); ?>">                             
                                                    <option  value=" " >Seleccione Tipo de Producto..</option>
                                                    <?php foreach ($tipo as $key => $tipo){?>
                                                    <option  value="<?php echo $tipo['idtipo_producto']?>">
                                                        <?php echo $tipo['nombre']?>
                                                    </option>
                                                    <?php } ?>
                                            </select>

                                            <div class="error">
                                                <?php echo form_error('tipo') ?>
                                            </div>                                
                                        </div>
                                    </div>
                                     <div class="col-lg-2"></div>

                                    <div class="col-lg-2">
                                        <label>Precio:</label>
                                        <div class="form-group input-group">

                                            <span class="input-group-addon">$</span>
             
                                            <input id='campo' name="precio" type="text" value="<?php echo $producto['precio']; ?>" class="form-control precio" >
                                       
                                          
                                             <div class="error">
                                                <?php echo form_error('precio') ?>
                                            </div>
                                        </div>

                                          
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                           <label>Descripcion:</label>
                                            <input name="descripcion" value="<?php echo $producto['descripcion'] ?>" class="form-control" placeholder="Descripción del Producto" >
                                             <div class="error">
                                                <?php echo form_error('descripcion') ?>
                                            </div>
                                        </div>
                                    </div>

                             

                                    <div class="row">   
                                        <div class="col-lg-8">
                                            <div class="form-group" id="dpzone" style="width:1000px;display: none;">
                                                    
                                            </div>  
                                            
                                        </div>
                                    </div>

                                    </div>
                                    <!-- .row-->

                                    <div class="form-group">
                                         <div class="col-lg-5">
                                            <a class="fancybox btn-default btn pull-right" href="#dpzone" title="Imagenes del modelo <?php echo $producto['modelo']; ?>"  id="actImg">Modificar Imagen(es)</a>
                                        </div>   
                                        <div class="col-lg-6">
                                             <input type="submit" class="btn-default btn pull-right" id="actualizar" value="Actualizar Producto"  />
                                        </div>
                                         <div class="col-lg-1">
                                             <input type="button" class="btn-default btn pull-right" id="salir" value="Salir"  onclick="window.location.href='index.php/admin/editaproducto'" />
                                        </div>

                                    </div>
                                   
                                     
                                </form>

                            </div>
                            <!-- .row-->

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
<script src="js/dropzone.js"> </script>
<script>


    $("#dpzone").append("<label>Imagen(es):</label><div class='dropzone sombreado2' id='dropzone_edit'>");

 $("#dropzone_edit").dropzone({
    url: "index.php/admin/upload_server/<?php echo $producto['idproducto']; ?>/1",
    dictResponseError: "Ha ocurrido un error en el server",
    acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF',
    addRemoveLinks: true,
    maxFiles: 3,
    parallelUploads: 2,
    maxFileSize: 100,
    method: "post",
    autoProcessQueue: true,
    init: function() {
        //esta version permite subir imagenes del mismo nombre

         thisDropzone = this;
           $.get("index.php/admin/thumbnail/<?php echo $producto['idproducto']; ?>/1", function(data) {
                $.each(data, function(key,value){
                     var mockFile = { name: value.name, size: value.size };
                     if( (value.name && value.size )!= null  ) {
                        thisDropzone.options.addedfile.call(thisDropzone, mockFile);
                        thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "uploads/"+value.name);
                    }                 
                });           
           }); 



 
    },
    removedfile: function(file){
         var name = file.name;  
                 $.ajax({
                    url: "index.php/admin/delete_server/1",
                    type: "POST",
                    data: "filename="+name        
                });

                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;     

    }
 });

        
        $('.fancybox').fancybox();

</script>
        

</body>
