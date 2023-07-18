<?php
include_once('../Usuarios/connection.php');
include_once('../Usuarios/usuarios.php');
if($_POST)
{
   $Usuarios     = $_POST['Email'];
   $Passwordusu  = $_POST['contrasena'];

   $modelo = new Usuario();

if($modelo->login($Usuarios,$Passwordusu))
{
    header('Location:../../index.php');

}else
{
    header('Location:../../inicio.php');
}





}else {
    echo"<script>alert('Datos incorrectos'); window.location'../../index.php';</script>";


}


?>