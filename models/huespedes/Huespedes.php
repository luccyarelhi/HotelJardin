<?php
class Huespedes
{
  private $con;

  public function __construct() 
  {
    require_once "core/ConexionBD.php";
    require_once 'models/huespedes/Huesped.php';
    $this->con=new ConexionBD();
  }

  public function mostrar()
  {
    $resultSet=$this->con->getConexion()->query("SELECT * FROM HUESPEDES");
    $salida = "
    <table id=\"tablas1\" class=\"table table-striped table-bordered table-hover table-condensed\">
    <thead style=\"background-color: #800000; color: white;\">
      <tr>
        <th>#</th>
        <th>Nombre Completo</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Activo</th>
        <th>Opciones</th>
      </tr>
    <thead>
    <tbody>";
      while($row = $resultSet->fetch_array()) 
      {
        $idHuesped=$row["IdHuesped"];
        $nombre=$row["Nombre"];
        $paterno=$row["Paterno"];
        $materno=$row["Materno"];
        $email=$row["Email"];
        $telefono=$row["Telefono"];
        $celular=$row["Celular"];
        $activo=$row["Activo"];
        $salida .= "
        <tr>
          <td>$idHuesped</td>
          <td>$nombre $paterno $materno</td>
          <td>$email</td>
          <td>$telefono</td>
          <td>$celular</td>
          <td>";
          if ($activo==1) {
              $salida.="<i class='fa fa-check-square-o' ></i>";
            } else if ($activo==0) {
              $salida.="<i class='fa fa-minus-square-o' ></i>";
            }
           $salida .=" </td>
            <td><center>
              <button type='button' data-toggle='modal' data-target='#mdEditarHuesped'  class='btnEditarHuesped btn btn-warning btn-xs fa fa-edit' data-id='$idHuesped' data-n='$nombre' data-p='$paterno' data-m='$materno' data-e='$email' data-t='$telefono' data-c='$celular' data-a=".$activo." data-toggle='tooltip' title='Editar'></button>
              <button type='button' data-id='$idHuesped' class='btnEliminarHuesped btn btn-danger btn-xs glyphicon glyphicon-remove' data-toggle='tooltip' title='Eliminar'></button></center>
          </td> 
        </tr>";
      }  
    $salida .= "</tbody>
    </table>
    ";
  
    return $salida;
  }

  public function insertar($huesped)
  {

    $insertar="INSERT INTO HUESPEDES VALUES('".$huesped->getIdHuesped()."','"
                                              .$huesped->getNombre()."','"
                                              .$huesped->getPaterno()."','"
                                              .$huesped->getMaterno()."','"
                                              .$huesped->getEmail()."','"
                                              .$huesped->getTelefono()."','"
                                              .$huesped->getCelular()."','1')";
    $this->con->getConexion()->query($insertar);    

  } 

  function editar($idHuesped)
  {
    $sql  = "SELECT * FROM HUESPEDES WHERE IdHuesped=$idHuesped";
     
    $this->resultados =$this->con->getConexion()->query($sql);
    $row = $this->resultados->fetch_array();
    $idHuesped=$row['IdHuesped'];
    $nombre=$row['Nombre'];
    $paterno=$row['Paterno'];
    $materno=$row['Materno'];  
    $email=$row['Email'];  
    $telefono=$row["Telefono"];
    $celular=$row["Celular"];
    $activo=$row["Activo"];

    $datos=array(idHuesped=>$idHuesped,nombre=>$nombre,paterno=>$paterno,materno=>$materno,email=>$email,telefono=>$telefono,celular=>$celular,activo=>$activo);
    $jsondatos=json_encode($datos);
   
  } 
   
   
  function update($oldIdHuesped,$huesped)
  {

    $update="UPDATE HUESPEDES SET IdHuesped='{$huesped->getIdHuesped()}',"
                                ."Nombre='{$huesped->getNombre()}',"
                                ."Paterno='{$huesped->getPaterno()}',"
                                ."Materno='{$huesped->getMaterno()}',"
                                ."Email='{$huesped->getEmail()}',"
                                ."Telefono='{$huesped->getTelefono()}',"
                                ."Celular='{$huesped->getCelular()}',"
                                ."Activo='{$huesped->getActivo()}'"
                                ."WHERE IdHuesped='$oldIdHuesped'";
    $this->con->getConexion()->query($update);
    
    return $this->mostrar();                             
  } 

  function eliminar($idHuesped)
  {
    $sql = "DELETE FROM HUESPEDES WHERE idHuesped='$idHuesped'";
    $this->con->getConexion()->query($sql);
     return $this->mostrar();
  }


  public function __destruct() 
  {
      $this->con->getConexion()->close();    
  }
}

