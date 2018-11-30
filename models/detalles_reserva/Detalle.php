<?php

class Reservacion
{
  private $idReservacion;
  private $fechaEntrada;
  private $fechaSalida;
  private $precioT;
  private $dias;
  private $horaInicio;
  private $horaReserva;
    
  public function __construct($idReservacion=null,$fechaEntrada=null,$fechaSalida=null,$precioT=null,$dias=null,$horaInicio=null,$horaReserva=null) 
  {
    $this->idReservacion=$idReservacion;
    $this->fechaEntrada=$fechaEntrada;
    $this->fechaSalida=$fechaSalida;
    $this->precioT=$precioT;
    $this->dias=$dias;
    $this->horaInicio=$horaInicio;
    $this->horaReserva=$horaReserva;
  }

  function getIdReservacion() 
  {
    return $this->idReservacion;
  }

  function getFechaEntrada()
  {
    return $this->fechaEntrada;
  }
  
  function getFechaSalida()
  {
    return $this->fechaSalida;
  }

  function getPrecioT() 
  {
    return $this->precioT;
  }

  function getDias() 
  {
    return $this->dias;
  }
  function getHoraInicio() 
  {
    return $this->horaInicio;
  }
  function getHoraReserva() 
  {
    return $this->horaReserva;
  }

  function setIdReservacion($idReservacion) 
  {
    $this->idReservacion = $idReservacion;
  }

  function setFechaEntrada($fechaEntrada) 
  {
    $this->fechaEntrada = $fechaEntrada;
  }
  
  function setFechaSalida($fechaSalida)
  {
    $this->fechaSalida = $fechaSalida;
  }

  function setPrecioT($precioT) 
  {
    $this->precioT = $precioT;
  }

  function setDias($dias) 
  {
    $this->dias= $dias;
  }

  function setHoraInicio($horaInicio) 
  {
    $this->horaInicio = $horaInicio;
  }

  function setHoraReserva($horaReserva) 
  {
    $this->horaReserva = $horaReserva;
  }
}
