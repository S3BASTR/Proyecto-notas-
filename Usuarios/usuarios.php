<?php  
include_once ('./connection.php');
session_start();
class Usuario extends Conexion
{ 
  //Validar el estado de los diferentes roles
private $loggedIn = false; 
private $isAdmin = false; 
private $isDocente = false;

public function __construct()
  {
    $this->bd=parent::__construct();
  }

public function login($Usuarios,$Passwordusu)
{
  $statement = $this->bd->prepare("SELECT * FROM usuarios WHERE USUARIO = ?");
  $statement->execute([$Usuarios]);
  $user = $statement->fetch(PDO::FETCH_ASSOC);
    

       // Verificar la contraseña
if ($user && password_verify($Passwordusu, $user['PASSWORDU'])) 

{
          
           // Iniciar sesión
          $_SESSION['user_id'] = $user['ID_USUARIOS'];
          $_SESSION['username'] = $user['USUARIO'];
          $_SESSION['role'] = $user['PERFIL'];
          $_SESSION["validar"] = true;
          $_SESSION['NOMBRE'] = $user['NOMBREUSU']." ".$user['APELLIDOUSU'];
                      
      }
    }
public function validarsesion()
{
    if($_SESSION ['ID_USUARIOS']){
      if(!isset($_SESSION['start']))
      {
        $_SESSION['start'] = time();

      }else if (time() - $_SESSION['start'] > 60)

      {
        session_destroy();
        echo "<script>alert ('Cierre de sesion por inactividad'); window.location=../Inicio.php;</script>";
        $_SESSION['validar'] == false;
      }
      $_SESSION['start']= time();
    }
}


  public function cerrarsesion()
{
session_unset();
session_destroy();
}

public function isloggedIn()
{
return isset($_SESSION ['ID_USUARIOS']);
}

public function isAdmin()
    {
      return $this->isloggedId() && $_SESSION ['role'] === 'Administrador';
    }

    public function isDocente()
    {
      return $this->isloggedIn() && $_SESSION ['role']=== 'Docente';
    }
} 
?>