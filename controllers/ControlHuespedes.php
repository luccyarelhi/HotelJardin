<?php

class ControlHuespedes
{
    private $model;

    public function __construct()
    {
        require_once "models/huespedes/Huespedes.php";
        $this->model=new Huespedes();

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
        $viewIndex=new View("views/huespedes/viewHuespedes.php",$datos);
    }

    public function registrar()
    {   
        $huesped=new Huesped($_GET["idHuesped"],$_GET["nombre"],$_GET["paterno"],$_GET["materno"],$_GET["email"],$_GET["telefono"],$_GET["celular"]);
        $this->model->insertar($huesped);
        $this->mostrar();
    }

    public function mostrar()
    {
        echo $this->model->mostrar();
    }

    public function editar()
    {
        echo $this->model->editar($_GET["idHuesped"]);
    }

    public function update()
    {
        $oldIdHuesped=$_GET["oldIdHuesped"];
        $huesped=new Huesped($_GET["idHuesped"],$_GET["nombre"],$_GET["paterno"],$_GET["materno"],$_GET["email"],$_GET["telefono"],$_GET["celular"],$_GET["activo"]);
        echo $this->model->update($oldIdHuesped,$huesped);  
    }

    public function eliminar()
    {
     $idHuesped=$_GET["idHuesped"];
       
    echo $this->model->eliminar($idHuesped);   
    }

  
}
