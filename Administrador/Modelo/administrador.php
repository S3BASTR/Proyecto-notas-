<?php
include_once('../../Conexion.php');
class Administrador extends Conexion {
public function __construct(){
  $this->bd = parent::__construct();
}

//funcion para registrar los usuarios
public function addadmi($NOMBREUSU,$APELLIDOUSU,$USUARIO,$PASSWORDU,$PERFIL,$ESTADO);
{
  //Crear la sentencia SQL
  $statement = $this->bd->prepare("INSERT INTO usuarios(NOMBREUSU,APELLIDOUSU,USUARIO,PASSWORDU,PERFIL,ESTADO) VALUES(:NOMBREUSU,:APELLIDOUSU,:USUARIO,:PASSWORDU,:PERFIL,:ESTADO)");
  $statement->bindParam(':NOMBREUSU', $NOMBREUSU);
  $statement->bindParam(':APELLIDOUSU', $APELLIDOUSU);
  $statement->bindParam(':USUARIO', $USUARIO);
  $statement->bindParam(':PASSWORDU', $PASSWORDU);
  $statement->bindParam(':PERFIL', $PERFIL);
  $statement->bindParam(':ESTADO', $ESTADO);

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
  $resultado = array();
  $sql="SELECT * FROM usuarios WHERE Perfil='Administrador'";
  $result= $this->bd->query($sql);
  if ($result->rowCount()>0) {

  while ($row->$result->fetch()) {
    $resultado[]=$row;
  }
  return $resultado;

}
}

//Funcion para consultar el usuario de acuerdo a su id
public function getidad($Id)
{

$row=null;
$statement=$this->bd->prepare("SELECT * FROM usuarios WHERE ID_USUARIOS=:Id");
$statement->bindParam(':Id',$Id);
$statement ->execute();
$resultado = $statement->fetch(PDO::FETCH_ASSOC);
return $resultado;

}

//Actualizar los datos del usuario
public function updatead($Id,$NOMBREUSU,$APELLIDOUSU,$USUARIO,$PASSWORDU,$ESTADO); 
{
$statement=$this->bd->prepare("UPDATE usuarios SET NOMBREUSU=Nombreusu,APELLIDOUSU=Apellidousu,USUARIO= Usuariousu,PASSWORDU=Passwordusu,ESTADO=Estadousu WHERE ID_USUARIO=$Id)");
$statement->bindparam('Id,$Id');
statement->bindParam('NOMBREUSU,$Nombreusu');
statement->bindParam('APELLIDOUSU,$Apellidousu');
statement->bindParam('USUARIO,$Usuariousu');
statement->bindParam('PASSWORDU,$Passwordusu');
statement->bindParam('ESTADO,$Estadousu');

if ($statement->execute())
{
  header  ('location: ../Pages/index.php')
}else
{
  header ('location: ../Pages/edtitar.php')
}

}

//Funcion para eliminar el usuario
public function deletead($Id) {
  $statement=$this->bd->prepare("DELETE * FROM usuarios WHERE ID_USUARIOS=:Id");
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