<?php

class conexion{
    
public static function conectar(){
  
    $x = new PDO("mysql:host=127.0.0.1:33065; dbname=zapato; charset=utf8","root","");
    $x -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    return $x;
}
}

?>