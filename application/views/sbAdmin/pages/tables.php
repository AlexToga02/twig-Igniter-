<?php 
    $this->load->view('sbAdmin/sections/header'); 
    $this->load->view('sbAdmin/sections/navigation'); 
    $num1 = 1;
    $num2 = 1;
    $num3 = 1;
?>

   

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Tablas de la Base de Datos </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        

            <div class="row">
                <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Productos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Modelo</th>
                                            <th>Descripcion</th>
                                            <th>tipo</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    
                                        if(count($productos)==0)echo "No hay Productos";
                                            foreach ($productos as $key => $value) {
                                              echo "<tr>";
                                                echo "<td>".$num1++."</td>";
                                                echo "<td>".$value['modelo']."</td>";
                                                echo "<td>".$value['descripcion']."</td>";
                                                echo "<td>".$value['tipo']."</td>";
                                                                                           
                                              echo "</tr>";
                                             } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Servicios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>tipo</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(count($servicios)==0)echo "No hay Servicios";
                                            foreach ($servicios as $key => $value) {
                                              echo "<tr>";
                                                echo "<td>".$num2++."</td>";
                                                echo "<td>".$value['nombre']."</td>";
                                                echo "<td>".$value['descripcion']."</td>";
                                                echo "<td>".$value['tipo']."</td>";
                                                                                               
                                              echo "</tr>";
                                             } 
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

             <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Username</th>
                                            <th>Privilegio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(count($usuarios)==0)echo "No hay Usuarios";
                                            foreach ($usuarios as $key => $value) {
                                              echo "<tr>";
                                                echo "<td>".$num3++."</td>";
                                                echo "<td>".$value['nombre']."</td>";
                                                echo "<td>".$value['username']."</td>";
                                                echo "<td>".$value['Privilegio']."</td>";
                                                                                              
                                              echo "</tr>";
                                             } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>

            
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
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
