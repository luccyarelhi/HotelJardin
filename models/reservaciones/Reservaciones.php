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
        <th>IdHuesped</th>
        <th>IdUsuario</th>
        <th>Deposito</th>
        <th>Restante</th>
        <th>Activo</th>
        <th>Opciones</th>
      </tr>
    <thead>
    <tbody>";
      while($row = $resultSet->fetch_array()) 
      {
        $idReservacion=$row["IdReservacion"];
        $idHuesped=$row["IdHuesped"];
        $idUsuario=$row["IdUsuario"];
        $deposito=$row["Deposito"];
        $restante=$row["Restante"];
        $activo=$row["Activo"];
        $salida .= "
        <tr>
          <td>$idReservacion</td>
          <td>$idHuesped</td>
          <td>$idUsuario</td>
          <td>$deposito</td>
          <td>$restante</td>
          <td>$activo</td>
            <td>
            <button type='button' data-toggle='modal' data-target='#mdEditar' data-id='$idHabitacion' class='btnEditar btn btn-warning' >Editar</button>
            <button type='button' data-id='$idHabitacion' class='btnEliminar btn btn-danger'>Eliminar</button>
          </td> 
        </tr>";
      }  
    $salida .= "</tbody>

    </table>
    <div id='modale'></div>

    ";    
    return $salida;
  }

  public function insertar($reservacion)
  {

    $insertar="INSERT INTO RESERVACIONES VALUES('".$reservacion->getIdReservacion()."','"
                                            .$reservacion->getIdHuesped()."','"
                                            .$reservacion->getIdUsuario()."','"
                                            .$reservacion->getDeposito()."','"
                                            .$reservacion->getRestante()."','"
                                            .$reservacion->getAcceso()."')";
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

