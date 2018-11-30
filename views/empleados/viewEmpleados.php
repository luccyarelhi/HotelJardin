<br>
<!-- BOTON AGREGAR -->
<div align="right">
   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mdAgregarEmpleado">
     <i class="fa fa-check-square-o"></i> 
            Nuevo Registro
    </button>
</div>
<br>
<!-- MODAL AGREGAR REGISTRO -->
<div id="mdAgregarEmpleado" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmAgregar" role="form" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Agregar Empleado</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body"> 
                            <div class="form-group">
                                <label class="col-md-3 control-label">* IdUsuario:</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tfIdUsuario" id="tfIdUsuario" placeholder="#..." />
                                </div>
                            </div>                                   
                            <div class="form-group">
                                <label class="col-md-3 control-label">* Nombre(s):</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfNombre" id="tfNombre" placeholder='Nombre Completo'/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">* Apellidos:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfPaterno" id="tfPaterno" placeholder='Paterno...' />
                                </div>
                         
                                <div class="col-md-4">
                                   <input type="text" class="form-control" name="tfMaterno" id="tfMaterno" placeholder='Materno...' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Dirección:</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="tfColonia" id="tfColonia" placeholder='Colonia...'/>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="tfCalle" id="tfCalle" placeholder='Calle...' />
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tfNumero" id="tfNumero" placeholder='#...' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Ciudad:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfCiudad" id="tfCiudad" placeholder='Ciudad..' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Telefono(s):</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfTelefono" id="tfTelefono" placeholder='Casa...'/>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfCelular" id="tfCelular" placeholder='Celular...' />
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
                        <input  type="button" class="btn btn-success" id="btnAceptarEmpleado" value="Aceptar" name="btnRegistrar" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL EDITAR -->
    <div id="mdEditarEmpleado" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmAgregar" role="form" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar Empleado</h4>
                    </div>
                    <div class="panel-body"> 
                            <div class="form-group">
                                <label class="col-md-3 control-label">* IdUsuario:</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tfIdUsuario" id="tfIdUsuario2" disabled style="color: #00001a"/>
                                </div>
                            </div>                                   
                            <div class="form-group">
                                <label class="col-md-3 control-label">* Nombre(s):</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfNombre" id="tfNombre2" placeholder='Nombre Completo...'/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">* Apellidos:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfPaterno" id="tfPaterno2" placeholder='Paterno...' />
                                </div>
                         
                                <div class="col-md-4">
                                   <input type="text" class="form-control" name="tfMaterno" id="tfMaterno2" placeholder='Materno...' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Dirección:</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="tfColonia" id="tfColonia2" placeholder='Colonia...'/>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="tfCalle" id="tfCalle2" placeholder='Calle...' />
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tfNumero" id="tfNumero2" placeholder='#...' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Ciudad:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfCiudad" id="tfCiudad2" placeholder='Ciudad..' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Telefono(s):</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfTelefono" id="tfTelefono2" placeholder='Casa...'/>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="tfCelular" id="tfCelular2" placeholder='Celular...' />
                                </div>
                            </div>
                       
                        <div class="form-group">
                            <label class="col-md-3 control-label">Activo:</label>
                            <div class="col-md-8">
                                <label class="check"><input type="checkbox" style="font-size: 34px;" name="ActivoEdit" id="chkActivoEdit" /> Activar</label>
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
                        <input  type="button" class="btn btn-success fa fa-floppy-o" id="btnModificarEmpleado" data-id="" value="Aceptar"  />
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




