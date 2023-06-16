<?php
include_once('../../Conexion.php')
class Administrador extends Conexion
{

public function __construct(){
    $this->bd = parent::__construct();
}

//funcion para registrar los usuarios
public function addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estado);
{
  //Crear la sentencia SQL
  $statement = $this->bd->prepare("INSERT INTO USUARIOS(NOMBREUSU,APELLIDOUSU,USUARIO,PASSWORDU,PERFIL,ESTADO) VALUES(:NOMBREUSU,:APELLIDOUSU,:USUARIO,:PASSWORDU, :'Administrador',:'Activo')");

  $statement->bindParam(':Nombreusu', $Nombreusu);
  $statement->bindParam(':Apellidousu', $Apellidousu);
  $statement->bindParam(':Usuariousu', $Usuariousu);
  $statement->bindParam(':Passwordusu', $Passwordusu);
  $statement->bindParam(':Perfil', $Perfil);
  $statement->bindParam(':Estado', $Estado);
  if ($statement->execute())
  {

echo " Usuario registrado ";
header(Location: '../Pages/index.php');

  }else 
  {

    echo " Usuario no registrado";
    header(Location: '../Pages/agregar.php');

  }





}

//Funcion para consultar todos los usuarios admin

public function getadmin()
{

}

//Funcion para consultar el ususario de acuerdo a su id
public function getidad($Id)
{

}

//Actualizar los datos del usuario
public function updatead($Id,Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Estado);
{

}
//Funcion para eliminar el usuario
public function deletead($Id)
{

}

}

?>