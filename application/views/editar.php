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
                                <h4 class="pull-left page-title">Producto</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Editar Datos</h3>
                                    </div>
                                <div class="panel-body">
                                    <div class="container">
                                <form class="form-horizontal" action="index.php/Cestacion/actualizaproducto" method="POST">

                                <input type="hidden" id="idArticulo" name="idArticulo" 
                                            value="<?php echo $articulos['idArticulo']; ?>">

                                <div class="form-group">
                                  <label for="name" class="col-sm-2 control-label">Nombre</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="name" name="name" 
                                         value="<?php echo $articulos['Nombre']; ?>">
                                  </div>
                                    </div>

                                <div class="form-group">
                                  <label for="idcat" class="col-sm-2 control-label">IdCategoria</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="idcat" name="nom" value="<?php echo $articulos['IdCategoria'] ?>">
                                  </div>
                                    </div>

                                <div class="form-group">
                                  <label for="precio" class="col-sm-2 control-label">Precio</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $articulos['Precio'] ?>">
                                  </div>
                                    </div>

                                <div class="form-group">
                                  <label for="des" class="col-sm-2 control-label">Descripción</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="des" name="des" 
                                       value="<?php echo $articulos['Descripción'] ?>">
                                  </div>
                                    </div>

                                <div class="form-group">
                                  <label for="img" class="col-sm-2 control-label">imagen</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="img" name="img" 
                                       value="<?php echo $articulos['imagen'] ?>">
                                  </div>
                                    </div>

                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Actualizar</button>
                                  <a href="index.php/Cestacion/listaproductos" class="btn btn-primary">Cancelar</a>
                                </div>
                              </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


