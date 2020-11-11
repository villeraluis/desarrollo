<?php 
class estudiante_model{
    private $db;
    private $estudiante;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->estudiante=array();
    }
    
    public function get_estudiante(){
        $consulta=$this->db->query("select * from estudiante;");
        while($filas=$consulta->fetch_assoc()){
            $this->estudiante[]=$filas;
        }
        return $this->estudiante;
    }
}

?>