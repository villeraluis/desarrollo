<?php
class Conexionbd{
  

    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "api");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }


}
?>