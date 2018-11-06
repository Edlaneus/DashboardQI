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
                                <a href="index.php/Cestacion/hora" class="btn btn-lg btn-success btn-block waves-effect waves-light "><i class="fa fa-plus"></i> Crear Nuevo Horario</a>
                        <div class="panel">
                            <div class="panel-body">

                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Categoria</th>
                                        <th>Nombre</th>
                                        <th>Dia</th>
                                        <th>Hora</th>
                                    </tr>
                                        <?php
                                            for($i=0;$i<count($horarios);$i++){  ?>
                                                <tr>
                                                    <td><?php echo $horarios[$i]['Categoria']; ?></td>
                                                    <td><?php echo $horarios[$i]['Nombre']; ?></td>
                                                    <td><?php echo $horarios[$i]['Dia']; ?></td>
                                                    <td><?php echo $horarios[$i]['Hora']; ?></td>
                                                    <td>
                                                        <a href="index.php/Cestacion/edithora/<?php echo $horarios[$i]['IdHorario']; ?> "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>               
                                                     </td> 
                                                     <td>
                                                        <a onclick="abre_modal($(this).attr('data-horarios'),$(this).attr('data'));" data-horarios="<?php echo $horarios[$i]['Nombre'] ?>" data="index.php/Cestacion/deletehora/<?php echo $horarios[$i]['IdHorario'] ?>">
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

                <!--Inicia Modal Eliminar-->
                 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"></h4>
                            </div>
                        <div class="modal-body">
                                ¿Estas seguro de borra este Horario?
                        </div>
                        <div class="modal-footer">
                                <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <a id="borra" type="button" class="btn btn-primary" onclick="borrar(this)">Eliminar Horario</a>
                        </div>
                        </div>
                    </div>
                 </div>
                 <!--Termina Modal Eliminar-->
<!--                   Modal Add Category 
                <div class="modal fade" id="add-horario">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="submit" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Agregar</strong> un Horario</h4>
                            </div>
                            <div class="modal-body">
                                <form  method="POST" action="index.php/Cestacion/addhora">
                                    <div class="row">
                                        <div class="form-group">
                                                    <label for="cat" class="col-sm-2 control-label">Categoria</label>
                                                    <div class="col-sm-10">
                                                         <select  class="form-control" id="cat" name="cat" >
                                                             <option value="0">Seleccione una Categoria</option>
                                                             <option value="1">Curso</option>
                                                             <option value="2">Taller</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="nom" class="control-label col-lg-2">Nombre</label>
                                                <div class="col-lg-10">
                                                        <input class=" form-control" id="nom" name="nom" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="dia" class="control-label col-lg-2">Dia</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="dia" name="dia" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="hora" class="control-label col-lg-2">Hora</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="hora" name="hora" type="text">
                                                    </div>
                                                </div> 
                                    </div>
                                </form>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                END MODAL  -->



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