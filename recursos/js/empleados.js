
   /**************** INGRESAR **************************/

  $('#btnAceptarEmpleado').on('click',function()
  {
    var idUsuario=$("#tfIdUsuario").val();
    var nombre=$("#tfNombre").val();
    var paterno=$("#tfPaterno").val();
    var materno=$("#tfMaterno").val();
    var colonia=$("#tfColonia").val();
    var calle=$("#tfCalle").val();
    var numero=$("#tfNumero").val();
    var ciudad=$("#tfCiudad").val();
    var telefono=$("#tfTelefono").val();
    var celular=$("#tfCelular").val();
    $.ajax(
    {
      url:"index.php",
      data:"controller=ControlEmpleados&action=registrar&idUsuario="+idUsuario+"&nombre="+nombre+"&paterno="+paterno+"&materno="+materno+"&colonia="+colonia+"&calle="+calle+"&numero="+numero+"&ciudad="+ciudad+"&telefono="+telefono+"&celular="+celular,
      type:"GET"
    }).done(function(resultados)
    {
      $("#resultados").html(resultados); 
      $("#mdAgregarEmpleado").modal('hide');

    });
  });

   /**************** EDITAR **************************/

  $(".btnEditarEmpleado").on('click',function()
  {
    var idUsuario=$(this).attr('data-id');
    var nombre=$(this).attr('data-n');
    var paterno=$(this).attr('data-p');
    var materno=$(this).attr('data-m');
    var colonia=$(this).attr('data-co');
    var calle=$(this).attr('data-ca');
    var numero=$(this).attr('data-nu');
    var ciudad=$(this).attr('data-ci');
    var email=$(this).attr('data-e');
    var telefono=$(this).attr('data-t');
    var celular=$(this).attr('data-ce');
    var activo=$(this).attr('data-a');

    $.ajax
    ({
      url:"index.php",
      data:"controller=ControlEmpleados&action=editar&idUsuario="+idUsuario,
      type:"GET"
    }).done(function(resultados)
    {
      
      $("#tfIdUsuario2").val(idUsuario);
      $("#tfNombre2").val(nombre);
      $("#tfPaterno2").val(paterno);
      $("#tfMaterno2").val(materno);
      $("#tfColonia2").val(colonia);
      $("#tfCalle2").val(calle);
      $("#tfNumero2").val(numero);
      $("#tfCiudad2").val(ciudad); 
      $("#tfEmail2").val(email);
      $("#tfTelefono2").val(telefono);
      $("#tfCelular2").val(celular);
      $("#btnModificarEmpleado").attr("data-id",idUsuario);
       var activar = (activo);
        if (activar == 1) {
        $("#chkActivoEdit").prop("checked",true);
        } else if (activo == 0) {
        $("#chkActivoEdit").prop("checked",false);
      }
    });
  });  

  $(document).on("click","#btnModificarEmpleado",function()
  {
    var oldIdUsuario=$("#btnModificarEmpleado").attr("data-id");  
    var idUsuario=$("#tfIdUsuario2").val();
    var nombre=$("#tfNombre2").val();
    var paterno=$("#tfPaterno2").val();
    var materno=$("#tfMaterno2").val();
    var colonia=$("#tfColonia2").val();
    var calle=$("#tfCalle2").val();
    var numero=$("#tfNumero2").val();
    var ciudad=$("#tfCiudad2").val();
    var telefono=$("#tfTelefono2").val();
    var celular=$("#tfCelular2").val();
    var activo="1";
    $.ajax(
    {  
      url:"index.php",
      data:"controller=ControlEmpleados&action=update&oldIdUsuario="+oldIdUsuario+"&idUsuario="+idUsuario+"&nombre="+nombre+"&paterno="+paterno+"&materno="+materno+"&colonia="+colonia+"&calle="+calle+"&numero="+numero+"&ciudad="+ciudad+"&telefono="+telefono+"&celular="+celular+"&activo="+activo,
      type:"GET"
    }).done(function(resultados)
    { 
      $("#mdEditarEmpleado").modal('hide');
      $("#resultados").html(resultados); 
    });    
  });

  $(".btnEliminarEmpleado").click(function()
  {
    var idUsuario=$(this).attr('data-id'); 
    
    $.ajax(
    {  
      url:"index.php",
      data:"controller=ControlEmpleados&action=eliminar&idUsuario="+idUsuario,
      type:"GET"
    }).done(function(resultados)
    {    
      $("#resultados").html(resultados); 
    }); 
  }); 