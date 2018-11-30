<?php

class Usuario  
{
  private $idUsuario;
  private $usuario;
  private $clave;
  private $tipoUsuario;
  private $activo;
    
  public function __construct($idUsuario=null,$usuario=null,$clave=null,$tipoUsuario=null,$activo=null) 
  {
    $this->idUsuario=$idUsuario;
    $this->usuario=$usuario;
    $this->clave=$clave;
    $this->tipoUsuario=$tipoUsuario;
    $this->activo=$activo;
  }

  function getIdUsuario() 
  {
    return $this->idUsuario;
  }

  function getUsuario()
  {
    return $this->usuario;
  }
  
  function getClave()
  {
    return $this->clave;
  }

  function getTipoUsuario() 
  {
    return $this->tipoUsuario;
  }


  function getActivo()
  {
    return $this->activo;
  }
  
  function setIdUsuario($idUsuario) 
  {
    $this->idUsuario = $idUsuario;
  }

  function setUsuario($usuario) 
  {
    $this->usuario = $usuario;
  }
  
  function setclave($clave)
  {
    $this->clave = $clave;
  }

  function setTipoUsuario($tipoUsuario) 
  {
    $this->tipoUsuario = $tipoUsuario;
  }

  function setActivo($activo)
  {
    $this->activo = $activo;
  }
}
