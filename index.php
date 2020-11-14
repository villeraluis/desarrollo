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
    if($_GET["accion"] == "guardarLectura"){
        $titulo=$_POST['titulo'];
        $contenido=$_POST['contenido'];
        $fecha=$_POST['fecha'];
        $controlador->nuevaLectura($titulo,$contenido,$fecha);
    }
    if($_GET["accion"] == "datosGuardados"){

        require ("vistas/vistasProfesor/vistaLecturasProfesor.php");
        require_once 'vistas/alertas/alertaDatoguardado.php'; 
    }
    if($_GET["accion"] == "datosNOGuardados"){
        
        
        require ("vistas/vistasLecturas/vistaAgregarLectura.php");
        require_once 'vistas/alertas/alertaDatoNoGuardado.php'; 
    }

    if($_GET["accion"] == "preguntas"){

        require ("vistas/vistasPreguntas/vistaAgregarPreguntas.php");
       
    }
    

} else {
    require_once 'vistas/vistaInicio.php';
    
}


?>



