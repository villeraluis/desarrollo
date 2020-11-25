<?php 
require ("modelo/modeloLogin.php");


class controladorLogin {


	
function __construct(){ 
    
	}



function ingresar($post){ 
    

    $valida = new modeloLogin();
    $resp=$valida->validacion($post);
    
    if (array_key_exists('correoUsuario', $resp)) {
        $_SESSION['correoUsuario']  = $resp['correoUsuario'];
        $_SESSION['rol']  = $resp['rol'];
        $_SESSION['idusuarios']  = $resp['idusuarios'];

       
        
    }else{
        echo $resp['success'];
    }
    

    require 'vistas/vistasProfesor/vistaLecturasProfesor.php';
   

}


}
?>