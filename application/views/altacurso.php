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
                                <h4 class="pull-left page-title">Alta de Curso</h4>
                            </div>
                        </div>

                        <!-- Form-validation -->
                        <div class="row">
                        
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Ingresar Datos</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="POST" action="index.php/Cestacion/addcurso">
<!--                                                 <div class="form-group">
                                                    <label for="cat" class="col-sm-2 control-label">Categoria</label>
                                                    <div class="col-sm-10">
                                                         <select  class="form-control" id="cat" name="cat" >
                                                             <option value="0">Seleccione una Categoria</option>
                                                             <option value="1">Curso</option>
                                                             <option value="2">Taller</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                <div class="form-group ">
                                                    <label for="nom" class="control-label col-lg-2">Nombre</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="nom" name="nom" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="dia" class="control-label col-lg-2">Descripción</label>
                                                    <div class="col-lg-10">
                                                        <textarea class=" form-control" id="des" name="des"></textarea>
<!--                                                         <input class=" form-control" id="des" name="des" type="text"> -->
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="dia" class="control-label col-lg-2">Fecha Inicio</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="finicio" name="finicio" type="date">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="dia" class="control-label col-lg-2">Fecha Termino</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="ffinal" name="ffinal" type="date">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="dia" class="control-label col-lg-2">Hora Inicio</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="horaini" name="horaini" type="time">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="dia" class="control-label col-lg-2">Hora Termino</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="horafin" name="horafin" type="time">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="hora" class="control-label col-lg-2">Cupo Maximo</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="cupomax" name="cupomax" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="hora" class="control-label col-lg-2">Cupos Disponibles</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="cupodis" name="cupodis" type="text">
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                  <label for="gpo" class="col-sm-2 control-label">Estado del Curso</label>
                                                <div class="col-sm-10">
                                                    <select  class="form-control" id="est" name="est" >
                                                      <option value="2">Seleccione un Estado</option>
                                                      <option value="0">Inactivo</option>
                                                      <option value="1">Activo</option>
                                                   </select>
                                                </div>
                                                </div>      
                                            <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Guardar</button>
                                                        <a href="index.php/Cestacion/listahora" class="btn btn-primary">Cancelar</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->

                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->



            </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->