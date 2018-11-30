<?php

class Empleado  
{
  private $idUsuario;
  private $nombre;
  private $paterno;
  private $materno;
  private $colonia;
  private $calle;
  private $numero;
  private $ciudad;
  private $telefono;
  private $celular;
  private $activo;
    
  public function __construct($idUsuario=null,$nombre=null,$paterno=null,$materno=null,$colonia=null,$calle=null,$numero=null,$ciudad=null,$telefono=null,$celular=null,$activo=null) 
  {
    $this->idUsuario=$idUsuario;
    $this->nombre=$nombre;
    $this->paterno=$paterno;
    $this->materno=$materno;
    $this->colonia=$colonia;
    $this->calle=$calle;    
    $this->numero=$numero;
    $this->ciudad=$ciudad;      
    $this->telefono=$telefono;
    $this->celular=$celular;
    $this->activo=$activo;
  }

  function getIdUsuario() 
  {
    return $this->idUsuario;
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

  function getColonia()
  {
    return $this->colonia;
  }

  function getCalle()
  {
    return $this->calle;
  }

  function getNumero()
  {
    return $this->numero;
  }

  function getCiudad()
  {
    return $this->ciudad;
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
  
  function setIdUsuario($idUsuario) 
  {
    $this->idUsuario = $idUsuario;
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

  function setColonia($colonia)
  {
    $this->colonia = $colonia;
  }

  function setCalle($calle)
  {
    $this->calle = $calle;
  }

  function setNumero($numero)
  {
    $this->numero = $numero;
  }

  function setCiudad($ciudad)
  {
    $this->ciudad = $ciudad;
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
