<?php 
require ("../modelo/modeloEstudiantes.php");



class controladorEstudiante {

    private $estudiante;
    
	
function __construct(){   
	}



function listarTodos(){    
   $per=new modeloEstudiantes();
   $datos=$per->listarEstudiantes();
  require ("../vistas/vistasEstudiante/vistaEstudiante.php");
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