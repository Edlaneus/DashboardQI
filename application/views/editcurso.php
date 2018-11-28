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
                                <h4 class="pull-left page-title">Cursos</h4>
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
                                <form class="form-horizontal" action="index.php/Cestacion/actualizacurso" method="POST">

                                <input type="hidden" id="id_curso" name="id_curso" 
                                            value="<?php echo $cursos['id_curso']; ?>">
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 control-label">Nombre</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $cursos['nombre_curso']; ?>">
                                         
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="dia" class="col-sm-2 control-label">Descripción</label>
                                  <div class="col-sm-10">
                                    <textarea class="form-control" id="des" name="des"><?php echo $cursos['descripcion_curso'] ?></textarea>
<!--                                      <input type="text" class="form-control" id="des" name="des" value="<?php echo $cursos['descripcion_curso'] ?>"> -->
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="hora" class="col-sm-2 control-label">Fecha Inicio</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="finicio" name="finicio" value="<?php echo $cursos['finicio_curso'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="hora" class="col-sm-2 control-label">Fecha Termino</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="ffinal" name="ffinal" value="<?php echo $cursos['ffinal_curso'] ?>">
                                  </div>
                                </div>
                                <div class="form-group ">
                                    <label for="dia" class="control-label col-lg-2">Hora Inicio</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="hora" name="hora" type="time" value="<?php echo $cursos['horaini'] ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="dia" class="control-label col-lg-2">Hora Termino</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="hora" name="hora" type="time" value="<?php echo $cursos['horafin'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="hora" class="col-sm-2 control-label">Cupo Maximo</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="cupos" name="cupos" value="<?php echo $cursos['cupomax'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="hora" class="col-sm-2 control-label">Cupos Disponibles</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="cupos" name="cupos" value="<?php echo $cursos['cupodis'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="gpo" class="col-sm-2 control-label">Estado del Curso</label>
                                <div class="col-sm-10">
<!--                                   <?php echo 'Estado: '.$cursos['Estado'] ?> -->
                                    <select  class="form-control" id="est" name="est" >
                                      <option value="0">Seleccione un Estado</option>
                                      <option value="1" <?php if($cursos['estado']==1) echo 'selected=true' ?>>Inactivo</option>
                                      <option value="2" <?php if($cursos['estado']==2) echo 'selected=true' ?> >Activo</option>
                                   </select>
                                </div>
                                </div>
                                 <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Actualizar</button>
                                  <a href="index.php/Cestacion/listacursos" class="btn btn-primary">Cancelar</a>
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