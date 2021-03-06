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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Editar Datos</h3>
                                    </div>
                                <div class="panel-body">
                                    <div class="container">
                                <form class="form-horizontal" action="index.php/Cestacion/actualizapromos" method="POST">

                                <input type="hidden" id="IdPromo" name="IdPromo" 
                                            value="<?php echo $promociones['IdPromo']; ?>">

                                <div class="form-group">
                                  <label for="name" class="col-sm-2 control-label">Nombre</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="name" name="name" 
                                         value="<?php echo $promociones['Nombre']; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 control-label">Descripción</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="des" name="des" 
                                         value="<?php echo $promociones['descripcion']; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="img" class="col-sm-2 control-label">imagen</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="img" name="img" 
                                       value="<?php echo $promociones['Imagen'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="hora" class="col-sm-2 control-label">Fecha Inicio</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="fechaini" name="fechaini" value="<?php echo $promociones['fechaini'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="hora" class="col-sm-2 control-label">Fecha Termino</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="ffinal" name="ffinal" value="<?php echo $promociones['fechafin'] ?>">
                                  </div>
                                </div>
                                <div class="form-group ">
                                    <label for="dia" class="control-label col-lg-2">Hora Inicio</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="hora" name="hora" type="time" value="<?php echo $promociones['horaini'] ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="dia" class="control-label col-lg-2">Hora Termino</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="hora" name="hora" type="time" value="<?php echo $promociones['horafin'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Actualizar</button>
                                  <a href="index.php/Cestacion/listapromo" class="btn btn-primary">Cancelar</a>
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