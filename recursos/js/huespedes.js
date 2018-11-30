
  
   /**************** INGRESAR **************************/

  $('#btnAceptarHuesped').on('click',function()
  {
    var idHuesped=$("#tfIdHuesped").val();
    var nombre=$("#tfNombre").val();
    var paterno=$("#tfPaterno").val();
    var materno=$("#tfMaterno").val();
    var email=$("#tfEmail").val();
    var telefono=$("#tfTelefono").val();
    var celular=$("#tfCelular").val();
    $.ajax(
    {
      url:"index.php",
      data:"controller=ControlHuespedes&action=registrar&idHuesped="+idHuesped+"&nombre="+nombre+"&paterno="+paterno+"&materno="+materno+"&email="+email+"&telefono="+telefono+"&celular="+celular,
      type:"GET"
    }).done(function(resultados)
    {   
      $("#resultados").html(resultados); 
      $("#mdAgregarHuesped").modal('hide'); 
    });
  });

   /**************** EDITAR **************************/

  $(".btnEditarHuesped").click(function()
  {
    var idHuesped=$(this).attr('data-id');
    var nombre=$(this).attr('data-n');
    var paterno=$(this).attr('data-p');
    var materno=$(this).attr('data-m');
    var email=$(this).attr('data-e');
    var telefono=$(this).attr('data-t');
    var celular=$(this).attr('data-c');
    var activo=$(this).attr('data-a');
    $.ajax
    ({
      url:"index.php",
      data:"controller=ControlHuespedes&action=editar&idHuesped="+idHuesped,
      type:"GET",
      success: function(resultados)
      {
        $("#tfIdHuesped2").val(idHuesped);
        $("#tfNombre2").val(nombre);
        $("#tfPaterno2").val(paterno);
        $("#tfMaterno2").val(materno);
        $("#tfEmail2").val(email);
        $("#tfTelefono2").val(telefono);
        $("#tfCelular2").val(celular);
        $("#btnModificarHuesped").attr("data-id",idHuesped);
        var activar = (activo);
          if (activar == 1) {
          $("#chkActivoEdit").prop("checked",true);
          } else if (activar == 0) {
          $("#chkActivoEdit").prop("checked",false);
        }
      }
    });
  });  

  $(document).on("click","#btnModificarHuesped",function()
  {
    var oldIdHuesped=$("#btnModificarHuesped").attr("data-id");  
    var idHuesped=$("#tfIdHuesped2").val();
    var nombre=$("#tfNombre2").val();
    var paterno=$("#tfPaterno2").val();
    var materno=$("#tfMaterno2").val();
    var email=$("#tfEmail2").val();
    var telefono=$("#tfTelefono2").val();
    var celular=$("#tfCelular2").val();
    if ($("#chkActivoEdit").prop("checked")){
       var activo = "1";
    }else {
      var activo = "0"; 
    }
    $.ajax(
    {  
      url:"index.php",
      data:"controller=ControlHuespedes&action=update&oldIdHuesped="+oldIdHuesped+"&idHuesped="+idHuesped+"&nombre="+nombre+"&paterno="+paterno+"&materno="+materno+"&email="+email+"&telefono="+telefono+"&celular="+celular+"&activo="+activo,
      type:"GET"
    }).done(function(resultados)
    { 
      $("#resultados").html(resultados); 
      $("#mdEditarHuesped").modal('hide');
    });    
  });

  $(".btnEliminarHuesped").click(function()
  {
    var idHuesped=$(this).attr('data-id'); 
    
    $.ajax(
    {  
      url:"index.php",
      data:"controller=ControlHuespedes&action=eliminar&idHuesped="+idHuesped,
      type:"GET"
    }).done(function(resultados)
    {
       $("#resultados").html(resultados); 
    }); 
  }); 

