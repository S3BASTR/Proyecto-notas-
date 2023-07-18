<?php  
include_once ('../Usuarios/connection.php');
session_start();

class Usuario extends conect
{
Private $loggedIn = false;    
Private $isAdmin = false; 
Private $isdocente = false; 
}

class Usuario extends conect
{
   public function _construct(){
    $this->db= parent :: _construct();
   } 

   public function login($Usuarios,$Password)
   {
      $statement = $this->db->prepare("SELECT * FROM USUARIOS WHERE Usuario= AND Password=:Password");
      $statement->bindParam(':Usuario',$Usuarios);  
      $statement->bindParam(':Password',$Password);

      $statement->execute();

      if($statement->rowCount()==1)
      {
        $result=$statement->fetch();
        $_SESSION['usuario']=$result['NOMBREUSU']." ".$result['APELLIDOUSU'];
        $_SESSION['id']=$result['ID_USUARIOS'];
        $_SESSION['Perfil']=$result['PERFIL'];
        $_SESSION['star']=time();
        $_SESSION['expire']=$_SESSION['star']+[1*60];
        return true;
      }
      return false;
   }

   $result=$statement->fetch();
    $_SESSION['usuario']=$result['nombreusuario']." ".result[' apellidousuario'];
    $_SESSION['id']= $result['id_usuario '];
    $_SESSION['perfil']=$result['perfil'];
    $_SESSION['star']=time();
    $_SESSION['expire']=$_SESSION['start']+(1*60);
    return true;
}
return false;



   public function validarsesion()
   {
    if($_SESSION ['id_usuario']){
      if(!isset($_SESSION['start'])){
        $_SESSION['start'] = time();

      }else if (time()-$_SESSION['start']> 60){
        session_destroy();
        echo "<script>alert ('Cierre de sesion por inactividad'); window.location=../../index.php;</script>";
        $_SESSION['validar'] == false;
      }
      $_SESSION['start']= time();
    }
   }

   
  public function cerrarsesion()
   {
     session_start();
     session_destroy();
     echo"<script>alert('Sesion cerrada'); window.location'../../index.php';</script>";
   }

   public function isloggedId()
   {
     return isset($_SESSION ['id_usuario']);
   }

   public function isAdmin()
    {
      return $this->isloggedId() && $_SESSION ['role'] === 'Administrador';
    }

    public function isDocen()
    {
      return $return $this->isLoggedIn () && $_SESSION ['role']=== 'Docente';
    }

   

} 


?>