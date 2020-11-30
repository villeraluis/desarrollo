<?php 
require ("modelo/modeloLecturas.php");



class controladorLecturas {

   
	
function __construct(){ 
    
	}



function listarTodos(){ 
   $Lecturas=new modeloLecturas();    
   
   $datos=$Lecturas->listarLecturasProfesor($_SESSION['id']);
   require ("vistas/vistasProfesor/vistaLecturasProfesor.php");

   
}



///////////////////////////////

function crearLectura(){    
    $per=new modeloLecturas();
    require ("vistas/vistasLecturas/vistaAgregarLectura.php");
   // $per->añadirLectura($identificacion,$nombre,$correo,$contraseña);
   
 }

///////////////////////////////


 function nuevaLectura($titulo,$contenido,$fecha,$id){    
    $per=new modeloLecturas();
     if (strlen ( $titulo)>0 && strlen ( $contenido)>0 ){
        $per->añadirLectura($titulo,$contenido,$fecha,$id);
        header("Location: index.php?accion=datosGuardados");
die();
         
    }
    else{
        header("Location: index.php?accion=datosNOGuardados");
        die();
    }

    
   
 }
 
 //listar lecturas para el profesor
 function lecturasProfesor(){ 
   $Lecturas=new modeloLecturas();    
   
   $datos=$Lecturas->listarLecturasProfesor($_SESSION['id']);
   //print_r($datos);
   //exit;
   
   require ("vistas/vistasProfesor/vistaLecturasProfesor.php");

   

}


function guardarPregunta($post){
$lecturas=new modeloLecturas();

$lecturas->guardarPregunt($post);
require("vistas/vistasPreguntas/vistaAgregarPreguntas.php");


}
////////////////////////////

 function lecturaEstudiantes(){
   $Lecturas=new modeloLecturas();    
   
   $datos=$Lecturas->listarLecturas();

   require ("vistas/vistasEstudiante/vistaLecturasEstudiante.php");

 }

function listarUnaLectura($id){
       
   $per=new modeloLecturas();
   $per->listarUnaLectura($id);
 
 }


 function listarPregutaEs($id){
       
   $per=new modeloLecturas();
   $per->listarPreguntasE($id);
 
 }

 function listarRespuestaEs($id){
       
   $per=new modeloLecturas();
   $per->listarRespuestaE($id);
 
 }
/*
 

 

 function modificar(){    
    $per=new modeloLecturas();
    require ("../vistas/vistaLecturas.php");
    $per->modificarLectura($identificacion);
   
 }
 */

}
?>