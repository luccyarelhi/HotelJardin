<div id="Filtro">
    <section id="frmBuscarH">
      <form id="contactForm" name="contactform" data-toggle="validator" class="popup-form">
          <div class="form-group col-sm-3">
            <div id="1" class="help-block with-errors"></div>
              <input name="fname" id="inicio" placeholder="Fecha Llegada*" class="form-control" type="text" required data-error="Por favor ingresa llegada"> 
            <div class="input-group-icon"><i class="fa fa-calendar"></i></div>
          </div>

          <div class="form-group col-sm-3">
            <div class="help-block with-errors"></div>
            <input name="fname" id="fin" placeholder="Fecha Salida*" class="form-control" type="text" required data-error="Por favor ingresa Salida">
            <div class="input-group-icon"><i class="fa fa-calendar"></i></div>
          </div>

          <div class="form-group col-sm-2">
            <div class="help-block with-errors"></div>
              <select class="form-control" name="tfDisponibilidad" id="slcDisponibilidad" placeholder="Personas*">
                <option>1</option>
                <option>2</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            <div class="input-group-icon"><i class="fa fa-user"></i></div>
          </div><!-- end form-group -->

          <div class="form-group col-sm-3">
            <button type="button" id="btnBuscar" class="btn btn-custom" ><i class="fa fa-search"></i> Buscar</button>
          </div><!-- end form-group -->
        </div>
      </form>
    </section>
  </div>

<script src="recursos/js/reservar.js"></script>