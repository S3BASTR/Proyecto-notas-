<?php
class Conexion{
    public $bd;
  private $drive= "mysql";
  private $host = "localhost";
  private $dbname = "notas2023php";
  private $user = "root";
  private $password = "";

  public function __construct()
  {
   try
   {
     $bd = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}",$this->user,$this->password);

     $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     return $bd;

     echo "conexion realizada";

   }catch(PDOException $e){

   	echo "se tiene problemas para conectar ".$e->getMessage();

  }


  }

}
?>