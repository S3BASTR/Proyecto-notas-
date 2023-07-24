<?php

class Conexion
{
    // DEFINIR VARIABLES

    public $db;
    Private $drive= "mysql";
    Private $host= "localhost";
    Private $namebd= "notas2023php";
    Private $user= "root"; 
    Private $Password= "";

    public function __construct()
    {
        try{
$db = new PDO("{$this-> drive}:host={$this-> host}; namebd={$this-> namebd}",$this->user, $this-> Password);
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