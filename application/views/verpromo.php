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
                                <h4 class="pull-left page-title">Promociones</h4>
                            </div>
                        </div>
                                <a href="index.php/Cestacion/banner" class="btn btn-lg btn-success btn-block waves-effect waves-light "><i class="fa fa-plus"></i> Crear Nuevo Horario</a>
                        <div class="panel">
                            <div class="panel-body">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                    </tr>
                                        <?php
                                            for($i=0;$i<count($promociones);$i++){  ?>
                                                <tr>
                                                    <td><?php echo $promociones[$i]['Nombre']; ?></td>
                                                     <td><img  class ="img-responsive img-thumbnail" src="<?php echo 'images/'.$promociones[$i]['Imagen']?>" style='width: 75px; height: 75px;margin:10px auto;display:block;'></td>

                                                    <td>
                                                        <a href="index.php/Cestacion/editpromo/<?php echo $promociones[$i]['IdPromo']; ?> "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>               
                                                     </td> 
                                                     <td>
                                                        <a onclick="abre_modal($(this).attr('data-promociones'),$(this).attr('data'));" data-promociones="<?php echo $promociones[$i]['Nombre'] ?>" data="index.php/Cestacion/deletepromos/<?php echo $promociones[$i]['IdPromo'] ?>">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                        </a>                
                                                     </td>           
                                                </tr>
                                        <?php }  ?>           
                                </table>
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
                                ¿Estas seguro de borra este Producto?
                        </div>
                        <div class="modal-footer">
                                <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <a id="borra" type="button" class="btn btn-primary" onclick="borrar(this)">Eliminar Producto</a>
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