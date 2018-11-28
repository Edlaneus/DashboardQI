<?php  $est = array("","Inactivo","Activo"); ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Proveedores</h4>
                            </div>
                        </div>
                        <a href="index.php/Cestacion/altaproveedor" class="btn btn-lg btn-success btn-block waves-effect waves-light "><i class="fa fa-plus"></i>Agregar un nuevo Proveedor</a>
                        <div class="panel">
                            <div class="panel-body">
                             <table id="provee" class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th></th>
                                            <th>RFC</th>
                                            <th>Nombre</th>
                                            <th>Dirección</th>
                                            <th>Codigo Postal</th>
                                            <th>Correo Electronico</th>
                                            <th>Telefono</th>
                                            <th>Estatus</th>
                                         <th></th>
                                     </tr>
                                 </thead>
                             </table>
<!--                                 <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>RFC</th>
                                        <th>Razón Socíal</th>
                                        <th>Dirección</th>
                                        <th>Codigo Postal</th>
                                        <th>Correo Electronico</th>
                                        <th>Telefono</th>
                                        <th>Estado</th>
                                    </tr>
                                        <?php
                                            for($i=0;$i<count($proveedor);$i++){  ?>
                                                <tr>
                                                    <td><?php echo $proveedor[$i]['rfc']; ?></td>
                                                    <td><?php echo $proveedor[$i]['nombre']; ?></td>
                                                    <td><?php echo $proveedor[$i]['direccion']; ?></td>
                                                    <td><?php echo $proveedor[$i]['cp']; ?></td>
                                                    <td><?php echo $proveedor[$i]['email']; ?></td>
                                                    <td><?php echo $proveedor[$i]['tel']; ?></td>
                                                    <td><?php echo $est[$proveedor[$i]['estado']]; ?></td>
                                                    <td>
                                                        <a href="index.php/Cestacion/editproveedor/<?php echo $proveedor[$i]['idpro']; ?> "><span title="Modificar Proveedor" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>               
                                                     </td> 
                                                     <td>
                                                        <a onclick="abre_modal($(this).attr('data-proveedor'),$(this).attr('data'));" data-articulos="<?php echo $proveedor[$i]['nombre'] ?>" data="index.php/Cestacion/deleteproveedor/<?php echo $proveedor[$i]['idpro'] ?>">
                                                        <span title="Eliminar Proveedor" class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                        </a>                
                                                     </td>           
                                                </tr>
                                        <?php }  ?>           
                                </table> -->
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"></h4>
                            </div>
                        <div class="modal-body">
                                ¿Estas seguro de borrar este Proveedor?
                        </div>
                        <div class="modal-footer">
                                <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <a id="borra" type="button" class="btn btn-primary" onclick="borrar(this)">Eliminar Proveedor</a>
                        </div>
                        </div>
                    </div>
                 </div>


            <script>
  
                function abre_modal(nom,urlborra) {
                    $('#myModalLabel').text(nom);
                    $('#borra').attr('data',urlborra);
                    $("#myModal").modal('show');
                }

                function borrar(temp){
                    enlace = $(temp).attr('data');
                    $(temp).attr('href',enlace);    
                }

            </script>
                <footer class="footer text-right">
      
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->