<?php 
require ("modelo/modeloLecturas.php");



class controladorLecturas {

   
	
function __construct(){ 
    
	}



function listarTodos(){ 
   $Lecturas=new modeloLecturas();    
   
   $datos=$Lecturas->listarLecturas();
   require ("vistas/vistasProfesor/vistaLecturasProfesor.php");

}
function crearLectura(){    
    $per=new modeloLecturas();
    require ("vistas/vistasLecturas/vistaAgregarLectura.php");
   // $per->añadirLectura($identificacion,$nombre,$correo,$contraseña);
   
 }


 function nuevaLectura($titulo,$contenido,$fecha){    
    $per=new modeloLecturas();
     if (strlen ( $titulo)>0 && strlen ( $contenido)>0 ){
        $per->añadirLectura($titulo,$contenido,$fecha);
        header("Location: index.php?accion=datosGuardados");
die();
         
    }
    else{
        header("Location: index.php?accion=datosNOGuardados");
        die();
    }

    
   
 }
/*
function listarUno(){
       
   $per=new modeloLecturas();
   require ("../vistas/vistaLecturas.php");
    $per->listarUnLectura($identificacion);
 }

 function crearLectura(){    
    $per=new modeloLecturas();
    require ("../vistas/vistaLecturas.php");
    $per->añadirLectura($identificacion,$nombre,$correo,$contraseña);
   
 }

 function eliminar(){    
    $per=new modeloLecturas();
    require ("../vistas/vistaLecturas.php");
    $per->eliminarLectura($identificacion);
   
 }

 function modificar(){    
    $per=new modeloLecturas();
    require ("../vistas/vistaLecturas.php");
    $per->modificarLectura($identificacion);
   
 }
 */

}
?>