<?php
require_once('../../connection.php');
require_once('../../usuarios.php');

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $USUARIOUSU= $_POST['Email'];
    $PASSWORD= $_POST['contrasena'];

    $usu = new Usuario();

    $usu->login ($USUARIOUSU,$PASSWORD);

    //REDIRIGIR AL CONTROLADOR DE ACUERDO AL ROL
   if($usu->isLoggedIn()){
    if($usu->isAdmin()){
        header('Location: ../../index.php');

    } elseif(isDocen()){
        header('Location: ../../Materias/pages/index.php');
    }
    exit();
   }else{
    print "<script>alert(\"Nombre de usuario o contrasena incorrecto.\");window.location='../../index.php';</script>;";
   } 
}


?>