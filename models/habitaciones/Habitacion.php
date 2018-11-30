<?php

class Habitacion
{
  private $idHabitacion;
  private $disponibilidad;
  private $precio;
  private $descripcion;
  private $rutaImg;
  private $nombre;
  private $activo;
    
  public function __construct($idHabitacion=null,$disponibilidad=null,$precio=null,$descripcion=null,$rutaImg=null,$nombre=null,$activo=null) 
  {
    $this->idHabitacion=$idHabitacion;
    $this->disponibilidad=$disponibilidad;
    $this->precio=$precio;
    $this->descripcion=$descripcion;
    $this->rutaImg=$rutaImg;
    $this->nombre=$nombre;
    $this->activo=$activo;
  }

  function getIdHabitacion() 
  {
    return $this->idHabitacion;
  }
  
  function getDisponibilidad()
  {
    return $this->disponibilidad;
  }

  function getPrecio() 
  {
    return $this->precio;
  }

  function getDescripcion()
  {
    return $this->descripcion;
  }

  function getRutaImg()
  {
    return $this->rutaImg;
  }

  function getNombre()
  {
    return $this->nombre;
  }

  function getActivo()
  {
    return $this->activo;
  }

  function setIdHabitacion($idHabitacion) 
  {
    $this->idHabitacion = $idHabitacion;
  }

  function setDisponibilidad($disponibilidad)
  {
    $this->disponibilidad = $disponibilidad;
  }

  function setPrecio($precio) 
  {
    $this->precio = $precio;
  }

  function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }

  function setRutaImg($rutaImg)
  {
    $this->rutaImg = $rutaImg;
  }

  function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  function setActivo($activo)
  {
    $this->activo = $activo;
  }
}
