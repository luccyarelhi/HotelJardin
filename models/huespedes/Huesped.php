<?php

class Huesped
{
  private $idHuesped;
  private $nombre;
  private $paterno;
  private $materno;
  private $email;
  private $telefono;
  private $celular;
  private $activo;
    
  public function __construct($idHuesped=null,$nombre=null,$paterno=null,$materno=null,$email=null,$telefono=null,$celular=null,$activo=null) 
  {
    $this->idHuesped=$idHuesped;
    $this->nombre=$nombre;
    $this->paterno=$paterno;
    $this->materno=$materno;
    $this->email=$email;
    $this->telefono=$telefono;
    $this->celular=$celular;
    $this->activo=$activo;
  }

  function getIdHuesped() 
  {
    return $this->idHuesped;
  }

  function getNombre()
  {
    return $this->nombre;
  }
  
  function getPaterno()
  {
    return $this->paterno;
  }

  function getMaterno() 
  {
    return $this->materno;
  }

  function getEmail()
  {
    return $this->email;
  }

  function getTelefono()
  {
    return $this->telefono;
  }

  function getCelular()
  {
    return $this->celular;
  }

  function getActivo()
  {
    return $this->activo;
  }
  
  function setIdHuesped($idHuesped) 
  {
    $this->idHuesped = $idHuesped;
  }

  function setNombre($nombre) 
  {
    $this->nombre = $nombre;
  }
  
  function setPaterno($paterno)
  {
    $this->paterno = $paterno;
  }

  function setMaterno($materno) 
  {
    $this->materno = $materno;
  }

  function setEmail($email)
  {
    $this->email = $email;
  }

  function setTelefono($telefono)
  {
    $this->telefono = $telefono;
  }

  function setCelular($celular)
  {
    $this->celular = $celular;
  }

  function setActivo($activo)
  {
    $this->activo = $activo;
  }
}
