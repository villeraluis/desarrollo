<?php 
require ("../modelo/modeloEstudiantes.php");



class controladorEstudiante {

   
	
function __construct(){ 
    
	}



function listarTodos(){ 
   $estudiantes=new modeloEstudiantes();    
   
   $datos=$estudiantes->listarEstudiantes();
  require ("../vistas/vistasEstudiante/vistaTodosEstudiante.php");
}

function listarUno(){    
    $per=new modeloEstudiantes();
    $datos=$per->listarUnEstudiante($identificacion);
   require ("../vistas/vistaEstudiante.php");
 }

 function añadir(){    
    $per=new modeloEstudiantes();
    require ("../vistas/vistaEstudiante.php");
    $per->añadirE($identificacion,$nombre,$correo,$contraseña);
   
 }

 function eliminar(){    
    $per=new modeloEstudiantes();
    require ("../vistas/vistaEstudiante.php");
    $per->eliminarE($identificacion);
   
 }

 function modificar(){    
    $per=new modeloEstudiantes();
    require ("../vistas/vistaEstudiante.php");
    $per->modificarE($identificacion);
   
 }
 

}
?>