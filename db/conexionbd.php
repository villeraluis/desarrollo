<?php

class Conexionbd{
  
    
    public static function conexion(){
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::MYSQL_ATTR_FOUND_ROWS => true);
        try{  
        
        $conexion=new PDO('mysql:host=localhost;dbname=desarrollo',"root","",$opciones);
        return $conexion;

        }catch (PDOException $e)
        {
            die($e->getMessage());
        }

    }



}
