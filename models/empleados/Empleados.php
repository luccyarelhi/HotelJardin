<?php
class Empleados
{
  private $con;

  public function __construct() 
  {
    require_once "core/ConexionBD.php";
    require_once 'models/empleados/Empleado.php';
    $this->con=new ConexionBD();
  }

  public function mostrar()
  {
    $resultSet=$this->con->getConexion()->query("SELECT * FROM EMPLEADOS");
    $salida = "
    <table id=\"tablas1\" class=\"table table-striped table-bordered table-hover table-condensed\">
    <thead style=\"background-color: #800000; color: white;\">
      <tr>
        <th>Id</th>
        <th>Nombre Completo</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Activo</th>
        <th>Opciones</th>
      </tr>
    <thead>
    <tbody>";
      while($row = $resultSet->fetch_array()) 
      {
        $idUsuario=$row["IdUsuario"];
        $nombre=$row["Nombre"];
        $paterno=$row["Paterno"];
        $materno=$row["Materno"];
        $colonia=$row["Colonia"];
        $calle=$row["Calle"];
        $numero=$row["Numero"];
        $ciudad=$row["Ciudad"];
        $telefono=$row["Telefono"];
        $celular=$row["Celular"];
        $activo=$row["Activo"];
        $salida .= "
        <tr>
          <td>$idUsuario</td>
          <td>$nombre $paterno $materno</td>
          <td>$colonia $calle $numero</td>
          <td>$ciudad</td>
          <td>$telefono</td>
          <td>$celular</td>
          <td>";
            if ($activo==1) {
              $salida.="<i class='fa fa-check-square-o'></i>";
            } else if ($activo==0) {
              $salida.="<i class='fa fa-minus-square-o'></i>";
            }
           $salida .=" </td>
            <td>
              <button type='button' data-toggle='modal' data-target='#mdEditarEmpleado' class='btnEditarEmpleado btn btn-warning btn-xs fa fa-edit' data-id='$idUsuario' data-n='$nombre' data-p='$paterno' data-m='$materno' data-co='$colonia' data-ca='$calle' data-nu='$numero' data-ci='$ciudad' data-t='$telefono' data-ce='$celular' data-a=".$activo." data-toggle='tooltip' title='Editar'></button>
              <button type='button' data-id='$idUsuario' class='btnEliminarEmpleado btn btn-danger btn-xs glyphicon glyphicon-remove' data-toggle='tooltip' title='Eliminar'></button>
          </td> 
        </tr>";
      }  
    $salida .= "</tbody>
    </table>
    ";    
    return $salida;
  }

  public function insertar($empleado)
  {

    $insertar="INSERT INTO EMPLEADOS VALUES('".$empleado->getIdUsuario()."','"
                                              .$empleado->getNombre()."','"
                                              .$empleado->getPaterno()."','"
                                              .$empleado->getMaterno()."','"
                                              .$empleado->getColonia()."','"
                                              .$empleado->getCalle()."','"
                                              .$empleado->getNumero()."','"
                                              .$empleado->getCiudad()."','"
                                              .$empleado->getTelefono()."','"
                                              .$empleado->getCelular()."','0')";
    $this->con->getConexion()->query($insertar);    
  
  } 

  function editar($idUsuario)
  {
    $sql  = "SELECT * FROM EMPLEADOS WHERE IdUsuario=$idUsuario";
     
    $this->resultados =$this->con->getConexion()->query($sql);
    $row = $this->resultados->fetch_array();
    $idUsuario=$row['IdUsuario'];
    $nombre=$row['Nombre'];
    $paterno=$row['Paterno'];
    $materno=$row['Materno'];  
    $colonia=$row["Colonia"];
    $calle=$row["Calle"];
    $numero=$row["Numero"];
    $ciudad=$row["Ciudad"];
    $telefono=$row["Telefono"];
    $celular=$row["Celular"];

    $datos=array(idUsuario=>$idUsuario,nombre=>$nombre,paterno=>$paterno,materno=>$materno,colonia=>$colonia,calle=>$calle,numero=>$numero,ciudad=>$ciudad,telefono=>$telefono,celular=>$celular);
    $jsondatos=json_encode($datos);
   
  } 
   
   
  function update($oldIdUsuario,$empleado)
  {
    $update="UPDATE EMPLEADOS SET IdUsuario='{$empleado->getIdUsuario()}',"
                                ."Nombre='{$empleado->getNombre()}',"
                                ."Paterno='{$empleado->getPaterno()}',"
                                ."Materno='{$empleado->getMaterno()}',"
                                ."Colonia='{$empleado->getColonia()}',"
                                ."Calle='{$empleado->getCalle()}',"
                                ."Numero='{$empleado->getNumero()}',"
                                ."Ciudad='{$empleado->getCiudad()}',"
                                ."Telefono='{$empleado->getTelefono()}',"
                                ."Celular='{$empleado->getCelular()}',"
                                ."Activo='{$empleado->getActivo()}'"
                                ."WHERE IdUsuario='$oldIdUsuario'";
    $this->con->getConexion()->query($update);
    return $this->mostrar();                             
  } 

  function eliminar($idUsuario)
  {
    $sql = "DELETE FROM EMPLEADOS WHERE idUsuario='$idUsuario'";
    $this->con->getConexion()->query($sql);
     return $this->mostrar();
  }


  public function __destruct() 
  {
      $this->con->getConexion()->close();    
  }
}

