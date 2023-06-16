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



  }
  
  public function getidad($Id)
  {




  }



  public function updatead($Id,$Nombreusu,$Apellidousu,$Usuario ,$Passwordu,$Perfil,$Estado)
  {


  }

  PUBLIC function deletead($Id)
  {



  }

}



?>