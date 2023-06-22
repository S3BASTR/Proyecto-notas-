<?php


class Conexion
{
    public $bd;
    private $driver = "mysql";
    private $host = "localhost";
    private $namebd = "notas2023php";
    private $user = "root";
    private $Password = "";

    public function __construct()
    {

    try {
        $bd = new PDO("{$this->driver}:host={$this->host};namebd={$this->namebd}", $this->user,$this->Password);

        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Conexion exitosa";

        return $bd;

        
    } catch (PDOException $e) {
        echo "No se puede realizar la conexion ".$e->getMessage();
    }


    }

}

?>