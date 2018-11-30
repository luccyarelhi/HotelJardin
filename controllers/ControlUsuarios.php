<?php

class ControlUsuarios
{
    private $model;

    public function __construct()
    {
        require_once "models/usuarios/Usuarios.php";
        $this->model=new Usuarios();

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
        $viewIndex=new View("views/usuarios/viewUsuarios.php",$datos);
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
        $usuario=new Usuario($_GET["idUsuario"],$_GET["usuario"],$_GET["clave"],$_GET["tipoUsuario"],$_GET["activo"]);
        echo $this->model->update($oldIdUsuario,$usuario);  
    }

    public function eliminar()
    {
     $idUsuario=$_GET["idUsuario"];
       
    echo $this->model->eliminar($idUsuario);   
    }

  
}
