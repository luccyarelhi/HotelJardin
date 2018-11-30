<?php
class Habitaciones
{
  private $con;

  public function __construct() 
  {
    require_once "core/ConexionBD.php";
    require_once 'models/habitaciones/Habitacion.php';
    $this->con=new ConexionBD();
  }

  public function mostrar()
  {
    $resultSet=$this->con->getConexion()->query("SELECT * FROM HABITACIONES");
    $salida = "
    <table id=\"tablas1\" class=\"table table-striped table-bordered table-hover table-condensed\">
    <thead style=\"background-color: #800000; color: white;\">
      <tr>
        <th>#</th>
        <th>Disponibilidad</th>
        <th>Precio</th>
        <th>Descripcion</th>
        <th>RutaImg</th>
        <th>Nombre</th>
        <th>Activo</th>
        <th>Opciones</th>
      </tr>
    <thead>
    <tbody>";
      while($row = $resultSet->fetch_array()) 
      {
        $idHabitacion=$row["IdHabitacion"];
        $disponibilidad=$row["Disponibilidad"];
        $precio=$row["Precio"];
        $descripcion=$row["Descripcion"];
        $rutaImg=$row["RutaImg"];
        $nombre=$row["Nombre"];
        $activo=$row["Activo"];
        $salida .= "
        <tr>
          <td>$idHabitacion</td>
          <td>$disponibilidad</td>
          <td>$$precio</td>
          <td>$descripcion</td>
          <td>
            <div style='width:100px;'>
              <img src='$rutaImg?".time()."' class='img-responsive' data-id='$idHabitacion' style='cursor: pointer;' />
              </div>
            </td>
          <td>$nombre</td>
          <td>";
            if ($activo==1) {
              $salida.="<i class='fa fa-check-square-o'></i>";
            } else if ($activo==0) {
              $salida.="<i class='fa fa-minus-square-o'></i>";
            }
           $salida .=" </td>
           <td>
            <button type='button' data-toggle='modal' data-target='#mdEditarHabitacion'  class='btnEditarHabitacion btn btn-warning btn-xs fa fa-edit' data-id='$idHabitacion' data-d='$disponibilidad' data-p='$precio' data-de='$descripcion' data-r='$rutaImg' data-no='$nombre' data-a=".$activo." data-toggle='tooltip' title='Editar'></button>
            <button type='button'  data-toggle='modal'data-target='#mdEliminarHabitacion' data-id='$idHabitacion' class='btnEliminarH btn btn-danger btn-xs glyphicon glyphicon-remove' data-toggle='tooltip' title='Eliminar'></button>
          </td> 
        </tr>";
      }  
    $salida .= "</tbody>
    </table>
    ";    
    return $salida;
  }

    public function insertar($habitacion)
    {

    $insertar="INSERT INTO HABITACIONES VALUES('".$habitacion->getIdHabitacion()."','"
                                                 .$habitacion->getDisponibilidad()."','"
                                                 .$habitacion->getPrecio()."','"
                                                 .$habitacion->getDescripcion()."','"
                                                 .$habitacion->getRutaImg()."','"
                                                 .$habitacion->getNombre()."','1')";
    $this->con->getConexion()->query($insertar);     

   }

  function editar($idHabitacion)
  {
    $sql  = "SELECT * FROM HABITACIONES WHERE IdHabitacion=$idHabitacion";

    $this->resultados =$this->con->getConexion()->query($sql);
    $row = $this->resultados->fetch_array();
    $idHabitacion=$row['IdHabitacion'];
    $disponibilidad=$row['Disponibilidad'];
    $precio=$row['Precio'];  
    $descripcion=$row["Descripcion"];
    $rutaImg=$row['RutaImg'];
    $nombre=$row["Nombre"];

    $datos=array(idHabitacion=>$idHabitacion,disponibilidad=>$disponibilidad,precio=>$precio,descripcion=>$descripcion,rutaImg=>$rutaImg,nombre=>$nombre);
    $jsondatos=json_encode($datos);
  

  } 
   
  function update($oldIdHabitacion,$habitacion)
  {
    $update="UPDATE HABITACIONES SET IdHabitacion='{$habitacion->getIdHabitacion()}',"
                               ."Disponibilidad='{$habitacion->getDisponibilidad()}',"
                               ."Precio='{$habitacion->getPrecio()}',"
                               ."Descripcion='{$habitacion->getDescripcion()}',"
                               ."RutaImg='{$habitacion->getRutaImg()}',"
                               ."Nombre='{$habitacion->getNombre()}',"
                               ."Activo='{$habitacion->getActivo()}'"
                               ."WHERE IdHabitacion='$oldIdHabitacion'";
    $this->con->getConexion()->query($update);

  return $this->mostrar();
                          
  } 

  function eliminar($idHabitacion)
  {
    $sql = "DELETE FROM HABITACIONES WHERE IdHabitacion='$idHabitacion'";
    $this->con->getConexion()->query($sql);
    return $this->mostrar();
  }

    

  public function __destruct() 
  {
      $this->con->getConexion()->close();    
  }
}

