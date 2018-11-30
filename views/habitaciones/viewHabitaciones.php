<br>
<!-- BOTON AGREGAR -->
<div align="right">
   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mdAgregarHabitacion">
     <i class="fa fa-check-square-o"></i> 
            Nuevo Registro
    </button>
</div>

<!-- MODAL AGREGAR REGISTRO -->
<br>
    <div id="mdAgregarHabitacion" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmAgregar" role="form" class="form-horizontal formulario" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Agregar Habitación</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body"> 
                            <div class="form-group">
                                <label class="col-md-3 control-label"> IdHabitacion:</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tfIdHabitacion" id="tfIdHabitacion" placeholder="#..." required/>
                                </div>
                            </div>                                   
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Disponibilidad:</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="tfDisponibilidad" id="slcDisponibilidad" required>
                                        <option value="">Seleccione una opción</option>
                                        <option>Disponible</option>
                                        <option>Ocupado</option>
                                    </select>
                                    <span class="form-control-feedback"><i class="fa fa-caret-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-md-3 control-label"> Precio:</label>
                                <label class="col-md-1 control-label"> $</label>
                                <div class="col-md-7">
                                   <input type="text" class="form-control" name="tfPrecio2" id="tfPrecio" placeholder="Precio..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Descripción:</label>
                                <div class="col-md-8">
                                    <textarea type="text" class="form-control" name="tfDescripcion" id="tfDescripcion" placeholder="Descripción..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Imagen:</label>
                                <div class="col-md-8">
                                    <input type="file" id="btnRutaImg" >
                                    <p class="help-block">La imagen no debe ser mayor a 1 Mb.</p>
                                </div>
                            </div>
                            <div class="form-group">
                               <center><div id="preview"></div></center>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Nombre:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfNombre" id="tfNombre" placeholder="Nombre..." />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <input  type="button" class="btn btn-success" id="btnAceptarHabitacion" value="Aceptar" name="btnRegistrar" />
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="mdEditarHabitacion" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmAgregar" role="form" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar Habitación</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body"> 
                            <div class="form-group">
                                <label class="col-md-3 control-label">* IdHabitacion:</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tfIdHabitacion2" id="tfIdHabitacion2" placeholder="#..." disabled style="color: #00001a"/>
                                </div>
                            </div>                                   
                            <div class="form-group">
                                <label class="col-md-3 control-label">*Disponibilidad:</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="tfDisponibilidad2" id="slcDisponibilidad2">
                                        <option value="">Seleccione una opción</option>
                                        <option>Disponible</option>
                                        <option>Ocupado</option>
                                    </select>
                                    <span class="form-control-feedback"><i class="fa fa-caret-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"> Precio:</label>
                                <label class="col-md-1 control-label"> $</label>
                                <div class="col-md-7">
                                   <input type="text" class="form-control" name="tfPrecio2" id="tfPrecio2" placeholder="Precio..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Descripción:</label>
                                <div class="col-md-8">
                                    <textarea type="text" class="form-control" name="tfDescripcion2" id="tfDescripcion2" placeholder="Descripción..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Imagen:</label>
                                <div class="col-md-8">
                                    <input type="file" id="tfRutaImg2" >
                                    <p class="help-block">La imagen no debe ser mayor a 1 Mb.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Nombre:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tfNombre2" id="tfNombre2" placeholder="Nombre..." />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Activo:</label>
                            <div class="col-md-8">
                                <label class="check"><input type="checkbox" style="font-size: 34px;" name="ActivoEdit" id="chkActivoEdit" /> Activar</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="btncancelar"  data-dismiss="modal">Cancelar</button>
                        <input  type="button" class="btn btn-success" id="btnModificarHabitacion" value="Aceptar" data-id="" name="btnRegistrar" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="mdVerImg" class="file-zoom-dialog modal fade" tabindex="-1" aria-labelledby="kvFileinputModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="kv-zoom-actions pull-right">
                        <button type="button" class="btn btn-default btn-close" title="Cerrar vista detallada" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></button>
                    </div>
                    <h3 class="modal-title">Vista detallada</h3>
                </div>
                <div class="modal-body">
                    <div class="floating-buttons"></div>
                    <div class="kv-zoom-body file-zoom-content">
                        <img id="imgDetail" class="file-preview-image kv-preview-data file-zoom-detail" style="width: auto; height: auto; max-width: 100%; max-height: 100%;" />
                        <embed id="docDetail" class="kv-preview-data file-zoom-detail" type="application/pdf" style="width: 100%; height: 100%; min-height: 480px;" />
                    </div>
                </div>
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



<style type="text/css">
    #preview 
    {
        border:1px solid #ddd;
        padding:5px;
        border-radius:2px;
        background:#fff;
        max-width:200px;
    }
    #preview img 
    {
        width:100%;
        display:block;
    }
    
</style>