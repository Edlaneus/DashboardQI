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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Editar Datos</h3>
                                    </div>
                                <div class="panel-body">
                                    <div class="container">
                                <form class="form-horizontal" action="index.php/Cestacion/actualizaproveedor" method="POST">

                                <input type="hidden" id="idpro" name="idpro" 
                                            value="<?php echo $proveedor['idpro'];?>">
                                <div class="form-group">
                                  <label for="rfc" class="col-sm-2 control-label">RFC</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="rfc" name="rfc" value="<?php echo $proveedor['rfc']; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="dia" class="col-sm-2 control-label">Razón Social</label>
                                  <div class="col-sm-10">
                                  <input type="text" class="form-control" id="rs" name="rs" value="<?php echo $proveedor['nombre']; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="hora" class="col-sm-2 control-label">Dirección</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="dir" name="dir" value="<?php echo $proveedor['direccion'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="hora" class="col-sm-2 control-label">Codigo Postal</label>
                                  <div class="col-sm-10">
                                     <input type="text" class="form-control" id="cp" name="cp" value="<?php echo $proveedor['cp'] ?>">
                                  </div>
                                </div>
                                <div class="form-group ">
                                    <label for="dia" class="control-label col-lg-2">Correo Electronico</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="email" name="email" type="email" value="<?php echo $proveedor['email'] ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="dia" class="control-label col-lg-2">Telefono</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="tel" name="tel" type="text" value="<?php echo $proveedor['tel'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="gpo" class="col-sm-2 control-label">Estado del Proveedor</label>
                                <div class="col-sm-10">
                                    <select  class="form-control" id="est" name="est" >
                                      <option value="0">Seleccione un Estado</option>
                                      <option value="1" <?php if($proveedor['estado']==1) echo 'selected=true' ?>>Inactivo</option>
                                      <option value="2" <?php if($proveedor['estado']==2) echo 'selected=true' ?> >Activo</option>
                                   </select>
                                </div>
                                </div>
                                 <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Actualizar</button>
                                  <a href="index.php/Cestacion/listaproveedores" class="btn btn-primary">Cancelar</a>
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