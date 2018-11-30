$(document).ready(function()
{
  /*********************************************************************  
   ******************* OPCIONES DE LA BARRA DE MENU ********************
   *********************************************************************/

   /**************** Ir del Login a AdminLTE **************************/

   $("#paginaPrincipal").on('click',function()
  {
    window.location="index.php?controller=ControlAdminLTE";
      
  });

  /********************************************************************/

 
  $(".pagina").click(function()
  {
    var menu=$(this).attr("data-menu");
    var titulo=$(this).attr("data-titulo");
    var cabecera='\
    \n<h1 class="letras2">'+titulo+'<small class="letras1">Hotel Jardín</small></h1>\
    \n      <ol class="breadcrumb">\
    \n        <li>\
    \n            <i class="fa fa-dashboard"></i> '+menu+'\
    \n        </li>\
    \n        <li class="active">'+titulo+'</li>\
    \n      </ol>\ ';
    $(".content-header").html(cabecera);

    $.ajax
    ({  
      url:"index.php",
      data:"controller="+$(this).attr("data-control"),
      type:"GET"
    }).done(function(resultados)
    {
      $("#contenido").html(resultados);

    });
  });



});
