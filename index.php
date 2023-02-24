<?php

$controlador="paginas";
$accion="inicio";

include_once("model/empleado.php");
include_once("config/conexion.php");

include_once('view/layouts/header.php');
include_once('view/layouts/footer.php');

if (isset($_GET['controlador']) && isset($_GET['accion'])){

    if(($_GET['controlador']!="") && ($_GET['accion']!="") ){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
    }

    
}



include_once("controller/controlador_".$controlador.".php");


$ObjetoControlador = "controlador".$controlador;
$controlador = new $ObjetoControlador();
$controlador->$accion();





?>


















