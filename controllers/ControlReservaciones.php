<?php

class ControlReservaciones
{
    private $model;

    public function __construct()
    {
        require_once "models/reservaciones/Reservaciones.php";
        $this->model=new Reservaciones();

        if(isset($_GET["action"]))
        {
            $action=$_GET["action"];
            if(method_exists($this, $action))
                $this->$action();
            else
                die("Método: $action, no implementado.<br>");
        }
        else
            if(method_exists($this, "index"))
                $this->index();
            else
                die("Método: \"index\" no implementado.<br>");
    }

    public function index()
    {
        $datos= $this->model->mostrar();
        $viewIndex=new View("views/reservaciones/viewReservaciones.php",$datos);
    }

    public function registrar()
    {   
        $huesped=new Reservacion($_GET["idReservaciones"],$_GET["fechaEtrada"],$_GET["fechaSalida"],$_GET["precioT"],$_GET["dias"]);
        $this->model->insertar($huesped);
        $this->mostrar();
    }

    public function mostrar()
    {
        echo $this->model->mostrar();
    }
    public function editar()
    {
        echo $this->model->editar($_GET["matricula"]);
    }
    public function update()
    {
       
        $oldMatricula=$_GET["oldMatricula"];
        $alumno=new Alumno($_GET["matricula"],$_GET["nombre"],$_GET["paterno"],$_GET["materno"]);
        echo $this->model->update($oldMatricula,$alumno);  
    }
    public function eliminar()
    {
     $matricula=$_GET["matricula"];
       
    echo $this->model->eliminar($matricula);   
    }

    public function promedios()
    {
        echo $this->model->promedios();
    }
}
