<?php

include_once('../../Conexion.php');
include_once('../modelos/administrador.php');

//Crear el objeto de la clase administrador;

$admin = new Administrador();

//Definir los argumentos que se van a enviar por medio de la funcion 


$Nombreusu = $_POST['txtnombre'];
$Apellidousu = $_POST['txtapellido'];
Usuariousu = $_POST ['txtusuario'];
Passwordusu = MD5 ($_POST['txtcontrasena']);
$Perfil = $_POST['txtperfil'];
$Estadousu = $_POST['txtestado']

$admin -> addadmin($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu);


?>