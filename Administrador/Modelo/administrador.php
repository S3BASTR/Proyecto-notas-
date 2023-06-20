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

  $row = null;
  $statement=$this->bd->prepare("SELECT * FROM USUARIOS WHERE Perfil='Administrador'");
  $statement->execute();
  while ($result->$statement->fetch()) {
    $row[]=$result;
  }
  result $row;

}

//Funcion para consultar el ususario de acuerdo a su id
public function getidad($Id)
{

$row=null;
$statement=$this->bd->prepare("SELECT * FROM USUARIOS WHERE ID_USUARIOS = :Id AND Perfil ='Administrador'")
$statement->bindParam(':Id',$Id);
$statement ->execute();
while ($result->statement .> fetch()) {
eow { $result;}
}

}

//Actualizar los datos del usuario
public function updatead($Id,Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Estado);
{

$statement=$this->bd->prepare("UPDATE USUARIOS GET NOMBREUSU=Nombreusu,APELLIDOUSU=Apellidousu,USUARIO= Usuariousu,PASSWORDU=Passwordusu,ESTADO=Estado WHERE ID_USUARIO=$Id)");
$statement->bindparam('Id,$Id');
statement->bindParam('NOMBREUSU,$Nombreusu');
statement->bindParam('APELLIDOUSU,$Apellidousu');
statement->bindParam('USUARIO,$Usuariousu');
statement->bindParam('PASSWORDU,$Passwordusu');
statement->bindParam('PASSWORDU,$Passwordusu');
statement->bindParam('ESTADO,$Estado');

IF ($statement->execute())
{
  header  ( ´location: ../Pages/index.php')
}else
{
  header ('location: ../Pages/edtitar.php
}


}
//Funcion para eliminar el usuario
public function deletead($Id)
{

  $statement=$this->bd->prepare("DELETE * FROM USUARIO WHERE ID_USUARIOS=:Id");
  $statement ->bindParam(':Id',$id);
  if($statement->execute())
  {
    echo "Usuario eliminado";
    header ('Location: ..Pages/index.php');
  }else
  {
  echo " Error no se puede eliminar usuario";
  header('Location: ..Pages/eliminar.php');
  }
}

}

?>