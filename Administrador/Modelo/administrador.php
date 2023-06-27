<?php
include_once('../../Conexion.php');
class Administrador extends Conexion {
    public function __construct() {
        $this->bd=parent::__construct();
    }

    //funcion para registrar usuarios
    public function addAdmi($NOMBREUSU,$APELLIDOUSU,$USUARIO,$PASSWORDU,$PERFIL,$ESTADO) 
    {
    $statement = $this->bd->prepare("INSERT INTO usuarios (NOMBREUSU, APELLIDOUSU, USUARIO, PASSWORDU, PERFIL, ESTADO) VALUES (:NOMBREUSU, :APELLIDOUSU, :USUARIO, :PASSWORDU, :PERFIL, :ESTADO)");
    $statement->bindParam(':NOMBREUSU',$NOMBREUSU);
    $statement->bindParam(':APELLIDOUSU',$APELLIDOUSU);
    $statement->bindParam(':USUARIO',$USUARIO);
    $statement->bindParam(':PASSWORDU',$PASSWORDU);
    $statement->bindParam(':PERFIL',$PERFIL);
     $statement->bindParam(':ESTADO',$ESTADO);

    if ($statement->execute()){
            echo "usuario registrado";
            header('Location: ../Pages/index.php');
    }else {
            echo "usuario no registrado";
            header('Location: ../Pages/agregar.php');
        }
    }

    //funcion para consultar usuarios
    public function getadmin() {
        //$row=null;
 $sql = "SELECT * FROM usuarios WHERE PERFIL='Administrador'";
 $result = $this->bd->query($sql); 
 if ($result->rowCount() > 0) {
     while($row = $result->fetch()) {
         $resultset[] = $row;
     }
 }
 return $resultset;
}   

    //funcion para listar por id especifico
    public function getidad($ID) 
    {
        $row = null;
        $statement=$this->bd->prepare("SELECT * FROM usuarios WHERE PERFIL='Administrador'");
        $statement->bindParam(':ID',$ID);
        $statement->execute();
        
        while($resul = $statement->fetch())
        {
            $row[]=$resul;
        }
        return $row;
    }

    //funcion actualizar los datos del usuario
    public function updatead($ID, $NOMBREUSU, $APELLIDOUSU, $USUARIO, $PASSWORDU, $PERFIL, $ESTADO) {
        $statement=$this->bd->prepare("UPDATE usuarios SET ID_USUARIOS=:ID, NOMBREUSU=:NOMBREUSU, APELLIDOUSU=:APELLIDOUSU, USUARIO=:USUARIO, PASSWORDU=:PASSWORDU, PERFIL=:PERFIL, ESTADO=:ESTADO WHERE ID_USUARIOS= $ID");
        $statement->bindParam(':ID', $ID);
        $statement->bindParam(':NOMBREUSU', $NOMBREUSU);
        $statement->bindParam(':APELLIDOUSU', $APELLIDOUSU);
        $statement->bindParam(':USUARIO', $USUARIO);
        $statement->bindParam(':PASSWORDU', $PASSWORDU);
        $statement->bindParam(':PERFIL', $PERFIL);
        $statement->bindParam(':ESTADO', $ESTADO);
        if ($statement->execute()) {
            header('location: ../Pages/index.php');
        } else {
            echo "el usuario no";
            header('location: ../Pages/editar.php');
        }
    }

    //funcion eliminar usuario
    public function deletead($ID) {
        $statement = $this->bd->prepare("DELETE FROM usuarios WHERE ID_USUARIOS=:ID");
        $statement->bindParam(':ID', $ID);
        if ($statement->execute()) {
            echo "usuario eliminado";
            header('location: ../Pages/index.php');
        } else
        {
            echo "error no se puede eliminar";
            header ('location: ../Pages/eliminar.php');
        }
    }
}
?>
