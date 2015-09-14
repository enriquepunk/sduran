<?php
class Conexion{ 
    public $conexion;          
    public function Conexion(){  

       $db="anah-blog";
       $user="root";
       $pass="WccyKg4pDQ";
       $host="localhost"; 

      if(!isset($this->conexion)){
        try {
          $con = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
          $this->conexion = $con;
          //print "Conexión exitosa!";
        }
          catch (PDOException $e) {
          print "¡Error!: " . $e->getMessage() . "";
          die();
        }

      }

    }
}
