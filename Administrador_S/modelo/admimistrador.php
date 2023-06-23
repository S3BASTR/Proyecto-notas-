<?php
include_once ('../../Conexion.php')
class Administrador extends Conexion 
{


    public function __construct(){

        $this->db = parent::__construct();
    }


    //funcion para registrar usuarios

    public function addadmi($Nombreusu,$Apellidousu,$Usuariousu ,$Passwordu,$Perfil,$Estadousu );
    {
          // Crear sentencia mysql

          $statement = $this->db->prepare("INSERT INTO usuarios($Nombreusu,$Apellidousu,$Usuario ,$Passwordu,$Perfil,$Estado)VALUES(:Nombreusu, :Apellidousu, :Usuariousu, :Passwprdusu, :'Administrador', : 'Activo')");
          

          $statement->bindParam(':Nombreusu',$Nombreusu);
          $statement->bindParam(':Apellidousu',$Apellidousu);
          $statement->bindParam(':Usuariousu',$Usuariousu);
          $statement->bindParam(':Passwordusu',$Passwordu); 
          $statement->bindParam(':Perfil',$Perfil);
          $statement->bindParam('Estadousu',$Estadousu);
          if($statement->execute())
          {
            echo "Regristrado con exito";
            header(Location: '../pages/index.php');
          }else
          {
            echo "Usuario registrado";
            header(Location: '../pages/agregar.php');
          }
        }

  public function getadmin()
  {

    $row=null;
    $statement=$this->db->prepare("SELECT *FROM usuarios WHERE perfil = 'Administrador'");
    $statement->execute();
    while ($result->$statement->fetch())
    {
      $row []= $result;
    }
    result $row; 

  }
  
  public function getidad($Id)
  {

   $row=null;
   $statement=$this->db->prepare("SELECT * FROM usuarios WHERE id_usario=:Id AND Perfl = 'Administrador'");
  $statement=->bindParam(':Id,$Id');
  while ($result->$statement->fetch())
  {
    $row[]=$result;
  }

  }



  public function updatead($Id,$Nombreusu,$Apellidousu,$Usuario ,$Passwordu,$Perfil,$Estadousu)
  {
    $statement=$this->bd->prepare("UPDATE usuarios SET Nombreusu=:Nombreusu,Apellidousu=Apellidousu, Usuario =: Usuariousu,Password=:Passwordusu, Estado=:Estadousu WHERE id_usaurio=$Id");
    $statement->bindParam(':Id',$Id);
    $statement->bindParam(':Nombreusu',$Nombreusu);
    $statement->bindParam(':Apellidousu',$Apellidousu);
    $statement->bindParam(':Usuariousu',$Usuariousu);
    $statement->bindParam(':Passwordusu',$Passwordu);
    $statement->bindParam(':Estadousu',$Estadousu);
    if($statement->execute())
    {
      header('Location: ../pages/index-php');
    }else
    {
      header('Location: ../pages/editar.php');
    }


  }

  PUBLIC function deletead($Id)
  {
   $statement=$this->db->prepare("DELETE FROM usuarios WHERE id_usuario=:$Id");
   $statement->bindParam(':Id',$Id);
   if($statement->execute()){
    echo "usuario eliminado";
    header('Location: ..pages/index.php');
   }else{
     echo"error no se puede eliminar"
     header('Location: ..pages/eliminar.php');
   }


  }


}



?>