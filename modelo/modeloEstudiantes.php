<?php 
require_once("../db/conexionbd.php");

class modeloEstudiantes{
    private $db;
    private $estudiante;
 
    public function __construct(){
        $this->db=Conexionbd::conexion();
        $this->estudiante=array();
    }
    
    
    public function listarEstudiantes(){
        $consulta=$this->db->query("select * from estudiantes");
        while($filas=$consulta->fetch_assoc()){
            $this->estudiante[]=$filas;
        }
        return $this->estudiante;
    }





}

?>