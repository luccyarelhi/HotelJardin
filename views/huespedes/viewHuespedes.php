<br>
<!-- BOTON AGREGAR -->
<div align="right">
   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mdAgregarHuesped">
     <i class="fa fa-check-square-o"></i> 
            Nuevo Registro
    </button>

</div>
<br>
<!-- MODAL AGREGAR REGISTRO -->
<div id="mdAgregarHuesped" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmAgregar" role="form" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Agregar Huesped</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body"> 
                            <div class="form-group">
                                <label class="col-md-3 control-label">* IdHuesped:</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tfIdHuesped" id="tfIdHuesped" placeholder="#" required />
                                </div>
                            </div>                                   
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Nombre(s):</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfNombre" id="tfNombre" placeholder="Nombre Completo" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Apellidos:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfPaterno" id="tfPaterno" placeholder="Paterno..." />
                                </div>
                                <div class="col-md-4">
                                   <input type="text" class="form-control" name="tfMaterno" id="tfMaterno" placeholder="Materno..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Email:</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="tfEmail" id="tfEmail" placeholder="Email..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Telefono(s):</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfTelefono" id="tfTelefono" placeholder="Casa..." />
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfCelular" id="tfCelular" placeholder="Celular..." />
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <label class="col-md-1"></label>
                            <div class="col-md-10">
                                <div class="alert alert-info" style="background-color: rgba(217, 237, 247, 0.4); color: #29b2e1; display: inline-block;" id="artCamposVacios">
                                   <i class="fa fa-info-circle"></i><strong> Todos lo campos con ( * ) son obligatorios.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <input  type="button" class="btn btn-success" id="btnAceptarHuesped" value="Aceptar" name="btnRegistrar" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL EDITAR -->
    <div id="mdEditarHuesped" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmAgregar" role="form" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar Huesped</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body"> 
                            <div class="form-group">
                                <label class="col-md-3 control-label">* IdHuesped:</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tfIdHuesped" id="tfIdHuesped2" placeholder="#" disabled style="color: #00001a" />
                                </div>
                            </div>                                   
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Nombre(s):</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfNombre" id="tfNombre2" placeholder="Nombre Completo" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Apellidos:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfPaterno" id="tfPaterno2" placeholder="Paterno..." />
                                </div>
                                <div class="col-md-4">
                                   <input type="text" class="form-control" name="tfMaterno" id="tfMaterno2" placeholder="Materno..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Email:</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="tfEmail" id="tfEmail2" placeholder="Email..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Telefono(s):</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfTelefono2" id="tfTelefono2" placeholder="Casa..." />
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfCelular2" id="tfCelular2" placeholder="Celular..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Activo:</label>
                                <div class="col-md-8">
                                    <label class="check"><input type="checkbox" style="font-size: 34px;" name="ActivoEdit" id="chkActivoEdit" /> Activar</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <label class="col-md-1"></label>
                            <div class="col-md-10">
                                <div class="alert alert-info" style="background-color: rgba(217, 237, 247, 0.4); color: #29b2e1; display: inline-block;" id="artCamposVacios">
                                   <i class="fa fa-info-circle"></i><strong> Todos lo campos con ( * ) son obligatorios.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <input  type="button" class="btn btn-success" id="btnModificarHuesped" data-id="" value="Aceptar"  />
                    </div>
                </form>
            </div>
        </div>
    </div>
   


<div id="resultados">
    <?php
    if(isset($data))
    {
        echo $data;
    } 
    ?>
</div>




