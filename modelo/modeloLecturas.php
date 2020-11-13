<?php 
require_once("db/conexionbd.php");

class modeloLecturas{
    private $db;
    private $lectura;
 
    public function __construct(){
        $this->db=Conexionbd::conexion();
        $this->estudiante=array();
    }
    
    
    public function listarLecturas(){
        $consulta=$this->db->query("select * from lecturas");
        while($filas=$consulta->fetch_assoc()){
            $this->lectura[]=$filas;
        }
        return $this->lectura;
    }

    public function añadirLectura($identificacion,$nombre,$correo,$contraseña){
        $consulta=$this->db->query("select * from lecturas");
        while($filas=$consulta->fetch_assoc()){
            $this->lectura[]=$filas;
        }
        return $this->lectura;
    }





}

?>