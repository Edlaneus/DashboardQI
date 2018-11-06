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
                                <h4 class="pull-left page-title">Productos</h4>
                            </div>
                        </div>
                                <a href="index.php/Cestacion/altes" class="btn btn-lg btn-success btn-block waves-effect waves-light "><i class="fa fa-plus"></i>Agregar un nuevo Producto</a>
                        <div class="panel">
                            <div class="panel-body">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>IdCategoria</th>
                                        <th>Precio</th>
                                        <th>Descripción</th>
                                        <th>Imagen</th>
                                    </tr>
                                        <?php
                                            for($i=0;$i<count($articulos);$i++){  ?>
                                                <tr>
                                                    <td><?php echo $articulos[$i]['Nombre']; ?></td>
                                                    <td><?php echo $articulos[$i]['IdCategoria']; ?></td>
                                                    <td><?php echo $articulos[$i]['Precio']; ?></td>
                                                    <td><?php echo $articulos[$i]['Descripción']; ?></td>
                                                    <td><img  class ="img-responsive img-thumbnail" src="<?php echo 'images/'.$articulos[$i]['imagen']?>" style='width: 75px; height: 75px;margin:10px auto;display:block;'></td>

                                                    <td>
                                                        <a href="index.php/Cestacion/editproducto/<?php echo $articulos[$i]['idArticulo']; ?> "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>               
                                                     </td> 
                                                     <td>
                                                        <a onclick="abre_modal($(this).attr('data-articulos'),$(this).attr('data'));" data-articulos="<?php echo $articulos[$i]['Nombre'] ?>" data="index.php/Cestacion/deleteproducto/<?php echo $articulos[$i]['idArticulo'] ?>">
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
                                ¿Estas seguro de borrar este Producto?
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