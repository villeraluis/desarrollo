<?php
require_once("db/conexionbd.php");

class modeloLecturas
{
    private $db;
    private $lectura;

    public function __construct()
    {
        $this->db = Conexionbd::conexion();
        $this->estudiante = array();
    }

//read lecturas
    public function listarLecturas()
    {
        $consulta = $this->db->query("select * from lecturas");
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->lectura[] = $filas;
        }
        return $this->lectura;

        echo $this->lectura;
        exit;
    }

    //create lectura
    public function añadirLectura($titulo, $contenido, $fecha)
    {
        $sql = "INSERT INTO lecturas VALUES (null,?,?,?,1)";
        $sql = $this->db->prepare($sql);
        $sql->bindParam(1, $titulo, PDO::PARAM_STR);
        $sql->bindParam(2, $contenido, PDO::PARAM_STR);
        $sql->bindParam(3, $fecha, PDO::PARAM_STR);        
        $sql->execute();

        
    }





}
