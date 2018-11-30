<?php

class ControlHabitaciones
{
    private $model;

    public function __construct()
    {
        require_once "models/habitaciones/Habitaciones.php";
        $this->model=new Habitaciones();

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
        $viewIndex=new View("views/habitaciones/viewHabitaciones.php",$datos);
    }

    public function registrar()
    {   
        $habitacion=new Habitacion($_GET["idHabitacion"],$_GET["disponibilidad"],$_GET["precio"],$_GET["descripcion"],$_GET["rutaImg"],$_GET["nombre"]);
        $this->model->insertar($habitacion);
        $this->mostrar();
    }

    public function mostrar()
    {
        echo $this->model->mostrar();
    }
    public function editar()
    {
        echo $this->model->editar($_GET["idHabitacion"]);
    }
    public function update()
    {
        $oldIdHabitacion=$_GET["oldIdHabitacion"];
        $habitacion=new Habitacion($_GET["idHabitacion"],$_GET["disponibilidad"],$_GET["precio"],$_GET["descripcion"],$_GET["rutaImg"],$_GET["nombre"],$_GET["activo"]);
        echo $this->model->update($oldIdHabitacion,$habitacion);  
    }
    public function eliminar()
    {
     $idHabitacion=$_GET["idHabitacion"];
       
    echo $this->model->eliminar($idHabitacion);   
    }

}
