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


    //read lecturas profesor
    public function listarLecturasProfesor($id)
    {

        $consulta = $this->db->prepare("SELECT * from lecturas WHERE idProfeC=? ");
        $consulta->bindParam(1, $id);
        $consulta->execute();


        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->lectura[] = $filas;
        }
        return $this->lectura;
        echo $this->lectura;
    }


    public function listarUnaLectura($id)
    {


        $consulta = $this->db->prepare("SELECT * from lecturas WHERE idlecturas=? ");
        $consulta->bindParam(1, $id);
        $consulta->execute();

        $validacion = $consulta->fetch(PDO::FETCH_ASSOC);
        echo json_encode($validacion);
    }


    //create lectura
    public function añadirLectura($titulo, $contenido, $fecha, $id)
    {
        $sql = "INSERT INTO lecturas VALUES (null,?,?,?,?)";
        $sql = $this->db->prepare($sql);
        $sql->bindParam(1, $titulo, PDO::PARAM_STR);
        $sql->bindParam(2, $contenido, PDO::PARAM_STR);
        $sql->bindParam(3, $fecha);
        $sql->bindParam(4, $id);
        $sql->execute();
    }




    public function listarPreguntasE($id)
    {

        $consulta = $this->db->prepare("SELECT * FROM preguntas WHERE lecturas_idlecturas=?");
        $consulta->bindParam(1, $id);
        $consulta->execute();

        $res = $consulta->fetchall(PDO::FETCH_ASSOC);
        echo json_encode($res);
    }

    public function listarRespuestaE($id)
    {

        $consulta = $this->db->prepare("SELECT * FROM respuetas WHERE preguntas_idpreguntas=?");
        $consulta->bindParam(1, $id);

        $consulta->execute();

        $res = $consulta->fetchall(PDO::FETCH_ASSOC);
        echo json_encode($res);
    }

    public function guardarPregunt($post)
    {
        $stClave = "";
    

       
        ////
        $idL = $post['idLecturaVista'];
        $contPre = $post['contenidoPreguta'];
        $sql = "INSERT INTO preguntas VALUES (null,?,?)";
        $sql = $this->db->prepare($sql);

        $sql->bindParam(1, $contPre);
        $sql->bindParam(2, $idL, PDO::PARAM_STR);
        $sql->execute();
        
        $idP=$this->db->lastInsertId();
        
        
        /////
        //print_r($post);
        foreach ($post as $key => $value) {
            if (strncasecmp('contenidoRespuesta', $key, 18) === 0) {
                $stClave =  $post[  $key ]; 
               
                
                if ($post['valorRespuetas']==substr($key, -1) ) {
                    $val=1;
                    $sql = "INSERT INTO respuetas VALUES (null,?,?,?)";
                    $sql = $this->db->prepare($sql);
                    $sql->bindParam(1, $stClave);
                    $sql->bindParam(2, $val);
                    $sql->bindParam(3, $idP);
                    $sql->execute();
                    
                } else {
                    $val=0;
                    $sql = "INSERT INTO respuetas VALUES (null,?,?,?)";
                    $sql = $this->db->prepare($sql);
                    $sql->bindParam(1, $stClave);
                    $sql->bindParam(2, $val);
                    $sql->bindParam(3, $idP);
                    $sql->execute();
                    
                }
            }
        }
    }
}
