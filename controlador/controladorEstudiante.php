<?php 


//Llamada al modelo
require_once("models/estudiante_model.php");
$per=new estudiante_model();
$datos=$per->get_estudiante();
 
//Llamada a la vista
require_once("views/estudiante_view.phtml");

?>