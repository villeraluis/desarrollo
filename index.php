<?php


if( isset($_GET["accion"])){
    require_once 'controlador/controladorLecturas.php';
    $controlador=new controladorLecturas();

    if($_GET["accion"] == "lecturas"){
        $controlador->listarTodos();
    }
    if($_GET["accion"] == "crearLectura"){
        $controlador->crearLectura();
    }
    

} else {
    require_once 'vistas/vistaInicio.php';
    
}


?>



