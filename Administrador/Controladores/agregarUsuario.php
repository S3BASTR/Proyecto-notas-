<?php
include_once('../../Conexion.php');
include_once('../Modelo/administrador.php');

$admin1= new Administrador();

$NOMBREUSU = $_POST["txtnombre"];
$APELLIDOUSU = $_POST["txtapellido"];
$USUARIO  = $_POST["txtusuario"];
$PASSWORDU = $_POST["txtcontrasena"];
$PERFIL = $_POST["txtperfil"];
$ESTADO = $_POST["txtestado"];

$admin1->addAdmi($NOMBREUSU,$APELLIDOUSU,$USUARIO,$PASSWORDU,$PERFIL,$ESTADO);
?>