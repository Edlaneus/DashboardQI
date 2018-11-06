
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
                                <h4 class="pull-left page-title">Alta de Producto</h4>
                            </div>
                        </div>

                        <!-- Form-validation -->
                        <div class="row">
                        
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Ingresar Datos</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="POST" action="index.php/Cestacion/addproducto" >
                                                <div class="form-group ">
                                                    <label for="nom" class="control-label col-lg-2">Nombre</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="nom" name="nom" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="idcat" class="control-label col-lg-2">IdCategoria</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="idcat" name="idcat" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="precio" class="control-label col-lg-2">Precio</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="precio" name="precio" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="des" class="control-label col-lg-2">Descripción</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="des" name="des" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="img" class="control-label col-lg-2">Imagen</label>
                                                    <div class="col-lg-10">
                                                        <input type="file" class="form-control " id="img" name="img">
                                                    </div>
                                                </div>         
                                            <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Guardar</button>
                                                        <a href="index.php/Cestacion/listaproductos" class="btn btn-primary">Cancelar</a>
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
