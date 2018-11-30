<?php
//session_start();
require_once "core/config.php";
require_once "core/View.php";
require_once "core/Layout.php";


if(isset($_GET["controller"]))
{
  $controller=$_GET["controller"];
  require_once "controllers/$controller.php";
}
else
{
  $controller=$controllerDefault;
  require_once "controllers/$controller.php";
}

$objeto=new $controller();
//session_destroy();

include_once "views/layout/linksFunciones.php";
?>
