<br>
<!-- BOTON AGREGAR -->

<br>

    <!-- MODAL EDITAR -->
    <div id="mdEditarUsuario" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmAgregar" role="form" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar Usuario</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body"> 
                            <div class="form-group">
                                <label class="col-md-3 control-label">* IdUsuario:</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tfIdUsuario" id="tfIdUsuario2" placeholder="#..." disabled style="color: #00001a"/>
                                </div>
                            </div>                                   
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Usuario:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfUsuario" id="tfUsuario2" placeholder="Usuario..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Contraseña:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfClave" id="tfClave2" placeholder="Contraseña..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Tipo Usuario:</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="slcTipoUsuario2" id="slcTipoUsuario2">
                                        <option value="">Seleccione una opción</option>
                                        <option>Administrador</option>
                                        <option>Usuario</option>
                                    </select>
                                    <span class="form-control-feedback"><i class="fa fa-caret-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
                        <input  type="button" class="btn btn-success" id="btnModificarUsuario" data-id="" value="Aceptar"  />
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





