<?php
class Conexion{
    public $bd;
    private $drive="mysql";
    private $host="localhost";
    private $bdname="notas2023php";
    private $user="root";
    private $password="";

    public function __construct(){
        try{
            $bd=new PDO("{$this->drive}:host={$this->host};bdname={$this->bdname}",$this->user,$this->password);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion realizada";
            return $bd;
            
        }catch(PDOException $e){
            echo "Ha surgido un error: Detalle " . $e->getMessage();
        }
    }
}
?>