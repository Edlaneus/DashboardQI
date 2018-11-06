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
                                <h4 class="pull-left page-title">Horarios</h4>
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
                                <form class="form-horizontal" action="index.php/Cestacion/actualizahoras" method="POST">

                                <input type="hidden" id="IdHorario" name="IdHorario" 
                                            value="<?php echo $horarios['IdHorario']; ?>">
                                <div class="form-group">
                                  <label for="gpo" class="col-sm-2 control-label">Categoria</label>
                                <div class="col-sm-10">
                                  <?php echo 'Categoria: '.$horarios['Categoria'] ?>
                                    <select  class="form-control" id="cat" name="cat" >
                                      <option value="0" <?php if($horarios['Categoria']==0) echo 'selected=true' ?>>Seleccione una Categoria</option>
                                      <option value="1" <?php if($horarios['Categoria']==1) echo 'selected=true' ?>>Curso</option>
                                      <option value="2" <?php if($horarios['Categoria']==2) echo 'selected=true' ?> >Taller</option>
                                   </select>
                                </div>
                                </div>
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 control-label">Nombre</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="name" name="name" value="<?php echo $horarios['Nombre']; ?>">
                                         
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="dia" class="col-sm-2 control-label">Dia</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="dia" name="dia" value="<?php echo $horarios['Dia'] ?>">
                                  </div>
                                    </div>

                                <div class="form-group">
                                  <label for="hora" class="col-sm-2 control-label">Hora</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="hora" name="hora" value="<?php echo $horarios['Hora'] ?>">
                                  </div>
                                    </div>
                                 <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Actualizar</button>
                                  <a href="index.php/Cestacion/listahora" class="btn btn-primary">Cancelar</a>
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