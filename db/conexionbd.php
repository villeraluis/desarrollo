<?php
class Conexionbd{
  

    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "appfin");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }


}
?>