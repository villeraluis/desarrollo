<?php
session_start();
session_destroy();
session_start();


if (isset($_GET["accion"])) {
    require_once 'controlador/controladorLecturas.php';
    require_once 'controlador/controladorUsuarios.php';
    require_once 'controlador/controladorLogin.php';
    $controladorLectura = new controladorLecturas();
    $controladorUsuario = new controladorUsuarios();
    $controladorLogin = new controladorLogin();

    //creando vista lecturas profecor
    if ($_GET["accion"] == "lecturas" && $_GET["usuario"] == 1) {
        $controladorLectura->listarTodos();
    }
    if ($_GET["accion"] == "crearLectura") {
        $controladorLectura->crearLectura();
    }

    if ($_GET["accion"] == "guardarLectura") {
        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];
        $fecha = $_POST['fecha'];
        $controladorLectura->nuevaLectura($titulo, $contenido, $fecha);
    }

    //creando la vista lecturas para estudiante
    if ($_GET["accion"] == "lecturas" && $_GET["usuario"] == 2) {
        $controladorLectura->listarTodos();
    }


    //guardando estudiante
    if ($_GET["accion"] == "guardarEstudiante") {

        $controladorUsuario->agregaUsuario($_POST);
    }

    if ($_GET["accion"] == "datosGuardados") {

        require("vistas/vistasProfesor/vistaLecturasProfesor.php");
        require_once 'vistas/alertas/alertaDatoguardado.php';
    }
    if ($_GET["accion"] == "datosNOGuardados") {


        require("vistas/vistasLecturas/vistaAgregarLectura.php");
        require_once 'vistas/alertas/alertaDatoNoGuardado.php';
    }

    if ($_GET["accion"] == "preguntas") {

        require("vistas/vistasPreguntas/vistaAgregarPreguntas.php");
    }

    if ($_GET["accion"] == "guardarPregunta") {

        print_r($_POST);
        require("vistas/vistasPreguntas/vistaAgregarPreguntas.php");
    }

    if ($_GET["accion"] == "registrarEstudiante") {


        require("vistas/vistasEstudiante/vistaRegistrarEstudiante.php");
    }

    if ($_GET["accion"] == "login") {


        require("vistas/autenticacion/login.php");
    }

    ///
    if ($_GET["accion"] == "listarLecturas") {


        $controlador->listarTodos();
    }

    if ($_GET["accion"] == "ingresar") {
        $varP = ($_POST);
        $controladorLogin->ingresar($varP);
    }

    if ($_GET["accion"] == "salir") {
        
        session_destroy();
        header("Location: index.php");
       
        die();
        
    }

    if ($_GET["accion"] == "reportes") {
        require 'vistas/email.php';
    }

    if ($_GET["accion"] == "enviarCorreo") {
       
        require_once 'controlador/controladorCorreo.php';
    }
} else {
    require 'vistas/vistaInicio.php';
}
