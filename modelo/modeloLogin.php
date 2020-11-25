<?php
require_once("db/conexionbd.php");

class modeloLogin
{
    private $db;
    private $usuario;

    public function __construct()
    {
        $this->db = Conexionbd::conexion();
        $this->usuarios = array();
    }

    //read    
    public function validacion($post)
    {
        $correo = $post['correo'];
        $clave = $post['clave'];

       

        $sql = "SELECT * FROM usuarios WHERE correoUsuario =? and contraseñaUsuario=?";
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $correo);
        $query->bindParam(2, $clave);
        $query->execute();
        $resultado = $query->fetch(PDO::FETCH_ASSOC);

        if ($query->rowCount() > 0) {
            return $resultado;
        }else{
            $msj=array("success" =>"el usuario no se encuentra");
            return $msj;
        }
        
    }
}
