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