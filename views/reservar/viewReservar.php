
<div id="Reservar"> 
  _______________________________________________________________________________________________________________________________
  <center><h4 class="modal-title" id="titulo">Información del Huesped</h4></center>
  _______________________________________________________________________________________________________________________________
      <p>
      <section id="frmReservar">
      <form id="contactForm" name="contactform" data-toggle="validator" class="popup-form formu">
          <div class="form-group col-sm-3 formu">
            <div id="1" class="help-block with-errors"></div>
              <input name="fname" id="tfNombre" placeholder="Nombre*" class="form-control" type="text" required data-error="Ingresa Nombre Completo"> 
            <div class="input-group-icon"><i class="fa fa-user"></i></div>
          </div>
          <div class="form-group col-sm-3">
            <div class="help-block with-errors"></div>
            <input name="fname" id="tfPaterno" placeholder="Paterno*" class="form-control" type="text" required data-error="Ingresa Apellido Paterno">
          </div>
          <div class="form-group col-sm-3">
            <div class="help-block with-errors"></div>
            <input name="fname" id="tfMaterno" placeholder="Materno*" class="form-control" type="text" required data-error="Ingresa Apellido Materno">
          </div>
          <div class="form-group col-sm-4">
            <div class="help-block with-errors"></div>
            <input name="phone" id="tfCelular" placeholder="Celular*" class="form-control" type="text" required data-error="Ingresa Celular">
            <div class="input-group-icon"><i class="fa fa-phone"></i></div> 
          </div>
          <div class="form-group col-sm-5">
            <div class="help-block with-errors"></div>
            <input name="phone" id="tfTelefono" placeholder="Casa*" class="form-control" type="text" >
          </div>
         
          <div class="form-group col-sm-6">
            <div class="help-block with-errors"></div>
            <input name="email" id="tfEmail" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}" class="form-control" type="email" required data-error="Ingresa un correo electrónico válido">
            <div class="input-group-icon"><i class="fa fa-envelope"></i></div>
          </div>

          <div class="form-group col-sm-6">
            <button type="button" id="btnReserva" class="btn btn-custom" ><i class="fa  fa-check-circle"></i> Reservar</button>
          </div><!-- end form-group -->
        </div>
      </form>
    </section>        
        
   
</div>


  <script src="recursos/js/reservar.js"></script>