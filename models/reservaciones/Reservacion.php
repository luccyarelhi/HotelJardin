<?php

class Reservacion
{
  private $idReservacion;
  private $idHuesped;
  private $idUsuario;
  private $deposito;
  private $restante;
  private $Acceso;
    
  public function __construct($idReservacion=null,$idHuesped=null,$idUsuario=null,$deposito=null,$acceso=null) 
  {
    $this->idReservacion=$idReservacion;
    $this->idHuesped=$idHuesped;
    $this->idUsuario=$idUsuario;
    $this->deposito=$deposito;
    $this->acceso=$acceso;
  }

  function getIdReservacion() 
  {
    return $this->idReservacion;
  }

  function getIdHuesped()
  {
    return $this->idHuesped;
  }
  
  function getIdUsuario()
  {
    return $this->idUsuario;
  }

  function getDeposito() 
  {
    return $this->deposito;
  }

  function getAcceso() 
  {
    return $this->acceso;
  }
  

  function setIdReservacion($idReservacion) 
  {
    $this->idReservacion = $idReservacion;
  }

  function setIdHuesped($idHuesped) 
  {
    $this->idHuesped = $idHuesped;
  }
  
  function setIdUsuario($idUsuario)
  {
    $this->idUsuario = $idUsuario;
  }

  function setDeposito($deposito) 
  {
    $this->deposito = $deposito;
  }

  function setAcceso($acceso) 
  {
    $this->acceso= $acceso;
  }


}
