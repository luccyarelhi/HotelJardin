
   /**************** INGRESAR **************************/

  $('#btnAceptarHabitacion').on('click',function()
  {
    var idHabitacion=$("#tfIdHabitacion").val();
    var disponibilidad=$("#slcDisponibilidad").val();
    var precio=$("#tfPrecio").val();
    var descripcion=$("#tfDescripcion").val();
    var rutaImg=$("#btnRutaImg").val();
    var nombre=$("#tfNombre").val();
   
    $.ajax(
    {
      url:"index.php",
      data:"controller=ControlHabitaciones&action=registrar&idHabitacion="+idHabitacion+"&disponibilidad="+disponibilidad+"&precio="+precio+"&descripcion="+descripcion+"&rutaImg="+rutaImg+"&nombre="+nombre,
      type:"GET"
    }).done(function(resultados) {
      $("#resultados").html(resultados); 
      
    });
  });

   /**************** EDITAR **************************/

  $(".btnEditarHabitacion").on('click',function()
  {
    var idHabitacion=$(this).attr('data-id'); 
    var disponibilidad=$(this).attr('data-d'); 
    var precio=$(this).attr('data-p'); 
    var descripcion=$(this).attr('data-de'); 
    var nombre=$(this).attr('data-no'); 
    var activo=$(this).attr('data-a')
;    $.ajax
    ({
      url:"index.php",
      data:"controller=ControlHabitaciones&action=editar&idHabitacion="+idHabitacion,
      type:"GET"
    }).done(function(resultados)
    {
      $("#tfIdHabitacion2").val(idHabitacion);
      $("#slcDisponibilidad2").val(disponibilidad);
      $("#tfPrecio2").val(precio);
      $("#tfDescripcion2").val(descripcion);
      $("#tfNombre2").val(nombre);
      $("#btnModificarHabitacion").attr("data-id",idHabitacion);
      var activar = (activo);
        if (activar == 1) {
        $("#chkActivoEdit").prop("checked",true);
        } else if (activar == 0) {
        $("#chkActivoEdit").prop("checked",false);
      }
    });
  });  

  $(document).on("click","#btnModificarHabitacion",function()
  {
    var oldIdHabitacion=$("#btnModificarHabitacion").attr("data-id");  
    var idHabitacion=$("#tfIdHabitacion2").val();
    var disponibilidad=$("#slcDisponibilidad2").val();
    var precio=$("#tfPrecio2").val();
    var descripcion=$("#tfDescripcion2").val();
    var rutaImg=$("#tfRutaImg2").val();
    var nombre=$("#tfNombre2").val();
    if ($("#chkActivoEdit").prop("checked")){
       var activo = "1";
    }else {
      var activo = "0"; 
    }
    $.ajax(
    {  
      url:"index.php",
      data:"controller=ControlHabitaciones&action=update&oldIdHabitacion="+oldIdHabitacion+"&idHabitacion="+idHabitacion+"&disponibilidad="+disponibilidad+"&precio="+precio+"&descripcion="+descripcion+"&rutaImg="+rutaImg+"&nombre="+nombre+"&activo="+activo,
      type:"GET"
    }).done(function(resultados)
    { 
      $("#mdEditarHabitacion").modal('hide');
      $("#resultados").html(resultados); 
    });    
  });

  $(".btnEliminarH").click(function()
  {
    var idHabitacion=$(this).attr('data-id'); 
    
    $.ajax(
    {  
      url:"index.php",
      data:"controller=ControlHabitaciones&action=eliminar&idHabitacion="+idHabitacion,
      type:"GET"
    }).done(function(resultados)
    {
      $(".btnEliminarHabitacion").attr("data-id",idHabitacion);
      $("#resultados").html(resultados); 
    }); 
  });    

  $(".btnEliminarHabitacion").click(function()
  {
    var idHabitacion=$(".btnEliminarHabitacion").attr("data-id");  
    
    $.ajax(
    {  
      url:"index.php",
      data:"controller=ControlHabitaciones&action=eliminar&idHabitacion="+idHabitacion,
      type:"GET"
    }).done(function(resultados)
    {
      $("#resultados").html(resultados); 
      $("#mdEliminarHabitacion").modal('hide');
    }); 
  });    

  $(document).on("click","#btnRutaImg",function()
    {
      document.getElementById("btnRutaImg").onchange = function(e) 
      {
          let reader = new FileReader();
          reader.onload = function()
          {
              let preview = document.getElementById('preview'),
              image = document.createElement('img');

              image.src = reader.result;
      
              preview.innerHTML = '';
              preview.append(image);
          };
   
          reader.readAsDataURL(e.target.files[0]);
      }
    });