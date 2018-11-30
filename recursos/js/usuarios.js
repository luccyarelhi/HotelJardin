
   /**************** EDITAR **************************/

  $(".btnEditarUsuario").on('click',function()
  {
    var idUsuario=$(this).attr('data-id');
    var usuario=$(this).attr('data-u');
    var clave=$(this).attr('data-c');
    var tipoUsuario=$(this).attr('data-tu');
    var activo=$(this).attr('data-a');
    $.ajax
    ({
      url:"index.php",
      data:"controller=ControlUsuarios&action=editar&idUsuario="+idUsuario,
      type:"GET"
    }).done(function(resultados)
    {
      $("#tfIdUsuario2").val(idUsuario);
      $("#tfUsuario2").val(usuario);
      $("#tfClave2").val(clave);
      $("#slcTipoUsuario2").val(tipoUsuario);
      $("#btnModificar").attr("data-id",idUsuario);
      var activar = (activo);
        if (activar == 1) {
        $("#chkActivoEdit").prop("checked",true);
        } else if (activar == 0) {
        $("#chkActivoEdit").prop("checked",false);
      }
    });
  });  

  $(document).on("click","#btnModificarUsuario",function()
  {
    var oldIdUsuario=$("#btnModificarUsuario").attr("data-id");  
    var idUsuario=$("#tfIdUsuario2").val();
    var usuario=$("#tfUsuario2").val();
    var clave=$("#tfClave2").val();
    var tipoUsuario=$("#slcTipoUsuario2").val();
    var activar = (activo);
        if (activar == 1) {
        $("#chkActivoEdit").prop("checked",true);
        } else if (activar == 0) {
        $("#chkActivoEdit").prop("checked",false);
      }
    $.ajax(
    {  
      url:"index.php",
      data:"controller=ControlUsuarios&action=update&oldIdUsuario="+oldIdUsuario+"&idUsuario="+idUsuario+"&usuario="+usuario+"&clave="+clave+"&tipoUsuario="+tipoUsuario+"&activo="+activo,
      type:"GET"
    }).done(function(resultados)
    { 
      $("#mdEditarUsuario").modal('hide');
      $("#resultados").html(resultados); 
    });    
  });

