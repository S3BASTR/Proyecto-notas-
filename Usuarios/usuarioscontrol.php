<?php
include_once('connection.php');
include_once('usuarios.php');

if($_SERVER['REQUEST_METHOD']==='POST')
{
$Usuarios= $_POST['Email'];
$Passwordusu= $_POST['contrasena'];

$usu = new Usuario();
$usu -> login($Usuarios,$Passwordusu);

//redirigir al controlador de acuerdo al rol 
if($usu->isloggedIn())
{
    if($usu->isAdmin())
    {
        header('Location: index.php');
    }elseif($usu->isDocente())
    {
        header('Location: ../Docentes/indexd.php');
    }
    exit();
}else {
    print "<script>alert('Nombre de usuario o contraseña incorrectos'); window.location='../Inicio.php';</script>";
}
}
?>
