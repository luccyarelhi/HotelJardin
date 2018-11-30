<?php
class Usuarios
{
  private $con;

  public function __construct() 
  {
    require_once "core/ConexionBD.php";
    require_once 'models/usuarios/Usuario.php';
    $this->con=new ConexionBD();
  }

  public function mostrar()
  {
    $resultSet=$this->con->getConexion()->query("SELECT * FROM USUARIOS");
    $salida = "
    <table id=\"tablas1\" class=\"table table-striped table-bordered table-hover table-condensed\">
    <thead style=\"background-color: #800000; color: white;\">
      <tr>
        <th>Id</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Tipo Usuario</th>
        <th>Activo</th>
        <th>Opciones</th>
      </tr>
    <thead>
    <tbody>";
      while($row = $resultSet->fetch_array()) 
      {
        $idUsuario=$row["IdUsuario"];
        $usuario=$row["Usuario"];
        $clave=$row["Clave"];
        $tipoUsuario=$row["TipoUsuario"];
        $activo=$row["Activo"];
        $salida .= "
        <tr>
          <td>$idUsuario</td>
          <td>$usuario</td>
          <td>$clave</td>
          <td>$tipoUsuario</td>
          <td>";
          if ($activo==1) {
              $salida.="<i class='fa fa-check-square-o' ></i>";
            } else if ($activo==0) {
              $salida.="<i class='fa fa-minus-square-o' ></i>";
            }
           $salida .=" </td>
            <td><center>
              <button type='button' data-toggle='modal' data-target='#mdEditarUsuario' data-id='$idUsuario' data-u='$usuario' data-c='$clave' data-tu='$tipoUsuario' data-a=".$activo." class='btnEditarUsuario btn btn-warning btn-xs fa fa-edit' data-toggle='tooltip' title='Editar'></button>
          </td> 
        </tr>";
      }  
    $salida .= "</tbody>
    </table>
    ";    
    return $salida;
  }


  function editar($idUsuario)
  {
    $sql  = "SELECT * FROM USUARIOS WHERE IdUsuario=$idUsuario";
     
    $this->resultados =$this->con->getConexion()->query($sql);
    $row = $this->resultados->fetch_array();
    $usuario=$row["Usuario"];
    $clave=$row["Clave"];
    $tipoUsuario=$row["TipoUsuario"];

    $datos=array(idUsuario=>$idUsuario,usuario=>$usuario,clave=>$clave,tipoUsuario=>$tipoUsuario);
    $jsondatos=json_encode($datos);
    
  } 
   
   
  function update($oldIdUsuario,$usuario)
  {
    $update="UPDATE USUARIOS SET IdUsuario='{$usuario->getIdUsuario()}',"
                                ."Usuario='{$usuario->getUsuario()}',"
                                ."Clave='{$usuario->getClave()}',"
                                ."TipoUsuario='{$usuario->getTipoUsuario()}',"
                                ."Activo='{$usuario->getActivo()}'"
                                ."WHERE IdUsuario='$oldIdUsuario'";
    $this->con->getConexion()->query($update);
    return $this->mostrar();                             
  } 


  public function __destruct() 
  {
      $this->con->getConexion()->close();    
  }
}

