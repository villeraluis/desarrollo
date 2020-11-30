<?php
session_start();



if (isset($_GET["accion"])) {
    require_once 'controlador/controladorLecturas.php';
    require_once 'controlador/controladorUsuarios.php';
    require_once 'controlador/controladorLogin.php';
    $controladorLectura = new controladorLecturas();
    $controladorUsuario = new controladorUsuarios();
    $controladorLogin = new controladorLogin();

###############################################################################
    //creando vista lecturas profesor
    if ($_GET["accion"] == "lecturas" && $_SESSION['rol']==2) {
       
        $controladorLectura->lecturasProfesor();
    }
    
    if ($_GET["accion"] == "mostrarLectura" ) {
       
        $controladorLectura->listarUnaLectura($_GET["id"]);
    }


    if ($_GET["accion"] == "crearLectura") {
        $controladorLectura->crearLectura();
    }

    if ($_GET["accion"] == "guardarLectura") {
        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];
        $fecha = $_POST['fecha'];
        $id=$_SESSION['id'];
        $controladorLectura->nuevaLectura($titulo, $contenido, $fecha,$id);
    }

    if ($_GET["accion"] == "preguntas" && $_SESSION['rol']==2) {

        require("vistas/vistasPreguntas/vistaAgregarPreguntas.php");
    }


    if ($_GET["accion"] == "guardarPregunta") {
        $controladorLectura->guardarPregunta($_POST);
       
        
    }

###############################################

    //creando la vista  y acciones de lecturas para estudiante
    if ($_GET["accion"] == "lecturas" && $_SESSION['rol']==3) {
        $controladorLectura->lecturaEstudiantes();
    }


    if ($_GET["accion"] == "preguntas"&& $_SESSION['rol']==3) {

        require("vistas/vistasEstudiante/vistaPreguntasEstudiante.php");
    }

    
    if ($_GET["accion"] == "listarPreguntasE" && $_SESSION['rol']==3) {

        $controladorLectura->listarPregutaEs($_GET['id']);
    }


    if ($_GET["accion"] == "listarRespuestasE" && $_SESSION['rol']==3) {

        $controladorLectura->listarRespuestaEs($_GET['id']);
    }


   



    
//carga de vista para formulario de registro estudiantes
    if ($_GET["accion"] == "registrarEstudiante") {
        require("vistas/vistasEstudiante/vistaRegistrarEstudiante.php");
    }

//carga de vista para formulario de registro profesor
    if ($_GET["accion"] == "registrarEstudiante") {
        require("vistas/vistasProfesor/vistaRegistrarProfesor.php");  
    }

//carga de vista para formulario de registro estudiantes
    if ($_GET["accion"] == "registrarProfesor") {


        require("vistas/vistasProfesor/vistaRegistrarProfesor.php");
    }

    if ($_GET["accion"] == "login") {


        require("vistas/autenticacion/login.php");
    }

     //#####################################

    //registro por primera vez se envia un enlace con los datos
    // de registro encriptados al correo para virificar que es real
    if ($_GET["accion"] == "registroPrim") {
        
        require 'controlador/controladorCorreo.php';
        $contCorr=new ControladorCorreo;
        $contCorr->enviarMail($_POST);
    }

//se recibe el enlace del corro y se desencryptan las variables para 
//guardarlas en la base de datos
    if ($_GET["accion"] == "autenticar") {  
        require 'controlador/controladorCorreo.php';
        $contCorreo=new ControladorCorreo;
        //se define un array para guardar los datos desencrptados
        $get= array('id'=>$contCorreo->decryptar($_GET['id']),
        'nombres'=>$contCorreo->decryptar($_GET['nombres'])
        ,'apellidos'=>$contCorreo->decryptar($_GET['ap']),
        'grado'=>$contCorreo->decryptar($_GET['gr']), 
        'correo'=>$contCorreo->decryptar($_GET['correo']),
        'clave'=>($_GET['co']),
        'codigo'=>$contCorreo->decryptar($_GET['cod']),
        'rol'=>$contCorreo->decryptar($_GET['r'])
        ) ;
        
        $controladorUsuario->agregaUsuario($get);
           
       
    }

//en caso de no guardarse los datos

    if ($_GET["accion"] == "datosNOGuardados") {

        require_once 'vistas/alertas/alertaDatoNoGuardado.php';
    }
//#########################################################

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
        
    }
   
    
} else {
    require 'vistas/vistaInicio.php';
}
