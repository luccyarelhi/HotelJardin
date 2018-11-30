$(document).ready(function()
{
	$("#Reservar").hide();
    $('#inicio').datepicker();
    $('#fin').datepicker();		
    
  $('#btnFormulario').on('click',function()
  {    
    $("#habitaciones").hide();
    $("#Reservar").show();
  }); 

  $('#btnReserva').on('click',function()
  {    
    $("#habitaciones").show();
    $("#Reservar").hide();
  }); 


});
