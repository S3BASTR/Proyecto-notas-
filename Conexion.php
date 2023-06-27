<?php

class Conexion
{
    // DEFINIR VARIABLES

    protected $db;
    
    Private $drive= "mysql";
    Private $host= "localhost";
    Private $namebd= "Notas2023";
    Private $user= "root"; 
    Private $Password= "";

    public function __construct()
    {
        try{
             $db = new PDO("{$this->drive}:host{$this->host};namebd={$this->namebd}",$this user,$this->password);
             $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             return $db;
             echo"conexion realizada";
        
              echo"<br>";

        }catch(PDOEXCEPTION $e){
            echo"no se puede realizar la conexion".$e.getMessage();  
     

        }
    }


}

?>