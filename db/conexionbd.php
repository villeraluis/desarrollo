<?php
class Conectar{
  

    public $pdo;


    public function __construct(){
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    
    }

}
?>