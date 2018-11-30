<br>
<div id="resultados">
    <div align="right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-check-square-o"></i> 
            Nuevo Registro
        </button>
    </div>
    <br>

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Registrar Reservación</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div> 
      </div>
    </div>
       

    <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

  
  
<?php
    if(isset($data))
    {
        echo $data;
    } 
    ?>
</div>

</body>
<script src="recursos/css/hotel.css"></script>
<script src="recursos/js/dataTablas.js"></script>


