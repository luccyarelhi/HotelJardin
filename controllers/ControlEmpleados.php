<?php

class ControlEmpleados
{
    private $model;

    public function __construct()
    {
        require_once "models/empleados/Empleados.php";
        $this->model=new Empleados();

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
        $viewIndex=new View("views/empleados/viewEmpleados.php",$datos);
    }

    public function registrar()
    {   
        $empleado=new Empleado($_GET["idUsuario"],$_GET["nombre"],$_GET["paterno"],$_GET["materno"],$_GET["colonia"],$_GET["calle"],$_GET["numero"],$_GET["ciudad"],$_GET["telefono"],$_GET["celular"]);
        $this->model->insertar($empleado);
        $this->mostrar();
    }

    public function mostrar()
    {
        echo $this->model->mostrar();
    }

    public function editar()
    {
        echo $this->model->editar($_GET["idUsuario"]);
    }

    public function update()
    {
        $oldIdUsuario=$_GET["oldIdUsuario"];
        $empleado=new Empleado($_GET["idUsuario"],$_GET["nombre"],$_GET["paterno"],$_GET["materno"],$_GET["colonia"],$_GET["calle"],$_GET["numero"],$_GET["ciudad"],$_GET["telefono"],$_GET["celular"],$_GET["activo"]);
        echo $this->model->update($oldIdUsuario,$empleado);  
    }

    public function eliminar()
    {
     $idUsuario=$_GET["idUsuario"];
       
    echo $this->model->eliminar($idUsuario);   
    }

  
}
