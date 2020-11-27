<?php 
require ("modelo/modeloLogin.php");


class controladorLogin {


	
function __construct(){ 
    
	}



function ingresar($post){ 
    

    $valida = new modeloLogin();
    $resp=$valida->validacion($post);
    
    if (array_key_exists('correoUsuario', $resp)) {
        $_SESSION['correo']  = $resp['correoUsuario'];
        $_SESSION['rol']  = $resp['rol'];
        $_SESSION['id']  = $resp['idusuarios'];
        $_SESSION['nombre']  = $resp['nombreUsuario'];


       
        
    }else{
        echo $resp['success'];
    }
    

    require 'vistas/vistaInicio.php';
   

}


}
?>