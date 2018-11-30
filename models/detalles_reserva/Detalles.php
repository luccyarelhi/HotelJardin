<?php
class Reservaciones
{
  private $con;

  public function __construct() 
  {
    require_once "core/ConexionBD.php";
    require_once 'models/reservaciones/Reservacion.php';
    $this->con=new ConexionBD();
  }

  public function mostrar()
  {
    $resultSet=$this->con->getConexion()->query("SELECT * FROM RESERVACIONES");
    $salida = "
    <table id=\"tablas1\" class=\"table table-striped table-bordered table-hover table-condensed\">
    <thead style=\"background-color: #800000; color: white;\">
      <tr>
        <th>IdReservacion</th>
        <th>FechaEntrada</th>
        <th>FechaSalida</th>
        <th>PrecioT</th>
        <th>Dias</th>
        <th>Opciones</th>
      </tr>
    <thead>
    <tbody>";
      while($row = $resultSet->fetch_array()) 
      {
        $idReservacion=$row["IdReservacion"];
        $fechaEntrada=$row["FechaEntrada"];
        $fechaSalida=$row["FechaSalida"];
        $precioT=$row["PrecioT"];
        $dias=$row["Dias"];
        $salida .= "
        <tr id='{$idReservacion}F'>
          <td>$idReservacion</td>
          <td>$fechaEntrada</td>
          <td>$fechaSalida</td>
          <td>$precioT</td>
          <td>$dias</td>
            <td>
            <button type='button' data-matricula='$matricula' class=\"btn btn-warning botones\">Editar</button>
            <button type='button' data-matricula='$matricula' class=\"btn btn-danger\">Eliminar</button>
          </td> 
        </tr>";
      }  
    $salida .= "</tbody>

    </table>

    

    ";    
    return $salida;
  }

  public function insertar($reservacion)
  {

    $insertar="INSERT INTO RESERVACIONES VALUES('".$reservacion->getIdReservacion()."','"
                                            .$reservacion->getFechaEntrada()."','"
                                            .$reservacion->getFechaSalida()."','"
                                            .$reservacion->getPrecioT()."','"
                                            .$reservacion->getDias()."')";
    $this->con->getConexion()->query($insertar);        
  } 
  function editar($matricula)
  {
    $sql  = "SELECT * FROM ALUMNOS WHERE Matricula=$matricula";
     

    $this->resultados =$this->con->getConexion()->query($sql);
    $row = $this->resultados->fetch_array();
    $matricula=$row['Matricula'];
    $nombre=$row['Nombre'];
    $paterno=$row['Paterno'];
    $materno=$row['Materno'];  

    echo "      
      <td><input  type='text'   id='tfMatricula2' value='$matricula'    size='5' /></td>
      <td><input  type='text'   id='tfNombre2'   value='$nombre'      size='26'/></td>
      <td><input  type='text'   id='tfPaterno2' value='$paterno' size='22' /></td>
      <td><input  type='text'   id='tfMaterno2' value='$materno' size='22' /></td>
      <td><button type='button' id='btnModificarAlumno' data-matricula='$matricula'>Modificar</button></td>";

  } 
   
  function update($oldMatricula,$alumno)
  {
    $update="UPDATE ALUMNOS SET Matricula='{$alumno->getMatricula()}',"
                               ."Nombre='{$alumno->getNombre()}',"
                               ."Paterno='{$alumno->getPaterno()}',"
                               ."Materno='{$alumno->getMaterno()}'"
                               ."WHERE Matricula='$oldMatricula'";
    $this->con->getConexion()->query($update);
   return $this->mostrar();
                               
  } 

  function eliminar($matricula)
  {
    $sql = "DELETE FROM ALUMNOS WHERE Matricula='$matricula'";
    $this->con->getConexion()->query($sql);
     return $this->mostrar();
  }

    

  public function __destruct() 
  {
      $this->con->getConexion()->close();    
  }
}

