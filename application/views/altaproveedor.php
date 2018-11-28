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
                                <h4 class="pull-left page-title">Alta de Proveedor</h4>
                            </div>
                        </div>

                        <!-- Form-validation -->
                        <div class="row">
                        
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Ingresar Datos</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="POST" action="index.php/Cestacion/addproveedor">
                                                <div class="form-group ">
                                                    <label for="rfc" class="control-label col-lg-2">RFC</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="rfc" name="rfc" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="rs" class="control-label col-lg-2">Razón Social</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="rs" name="rs" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="dir" class="control-label col-lg-2">Dirección</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="dir" name="dir" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cp" class="control-label col-lg-2">Codigo Postal</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="cp" name="cp" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="tel" class="control-label col-lg-2">Telefono</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="tel" name="tel" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="email" class="control-label col-lg-2">Correo Electrónico</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="email" name="email" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                  <label for="gpo" class="col-sm-2 control-label">Estado del Proveedor</label>
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
                                                        <a href="index.php/Cestacion/listaproveedores" class="btn btn-primary">Cancelar</a>
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