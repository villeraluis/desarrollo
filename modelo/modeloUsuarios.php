<?php
require_once("db/conexionbd.php");

class modeloUsuarios
{
    private $db;
    private $usuario;

    public function __construct()
    {
        $this->db = Conexionbd::conexion();
        $this->usuarios = array();
    }

    //read    
    public function listarUsuarios()
    {
        $consulta = $this->db->query("select * from estudiantes");
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->estudiante[] = $filas;
        }
        return $this->estudiante;
    }


    public function listarUnUsuario($identificacion)
    {
        $consulta = $this->db->query("select * from estudiantes");
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->estudiante[] = $filas;
        }
        return $this->estudiante;
    }

    //create
    public function addUsuario(
        $identificacion,
        $nombre,
        $apellido,
        $correo,
        $contraseña,
        $codigoVal,
        $grado,
        $rol
    ) {

        try {
            $sql = "INSERT INTO usuarios VALUES (null,?,?,?,?,?,? ,?,?)";
            $sql = $this->db->prepare($sql);

            $sql->bindParam(1, $identificacion);
            $sql->bindParam(2, $nombre);
            $sql->bindParam(3, $apellido);
            $sql->bindParam(4, $correo);
            $sql->bindParam(5, $contraseña);
            $sql->bindParam(6, $codigoVal);
            $sql->bindParam(7, $grado);
            $sql->bindParam(8, $rol);
            $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }




    //delete
    public function eliminarUsuario($identificacion)
    {
        $consulta = $this->db->query("select * from estudiantes");
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->estudiante[] = $filas;
        }
        return $this->estudiante;
    }



    //update
    public function modificarUsuario($identificacion)
    {
        $consulta = $this->db->query("select * from estudiantes");
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->estudiante[] = $filas;
        }
        return $this->estudiante;
    }
}
