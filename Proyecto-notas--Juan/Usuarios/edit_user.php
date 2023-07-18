<?php

include("connection.php");
$con = connection();

$ID_USUARIOS = $_POST["ID_USUARIOS"];
$NOMBREUSU = $_POST['name'];
$APELLIDOUSU = $_POST['lastname'];
$USUARIO = $_POST['username'];
$PASSWORDU = $_POST['password'];
$PERFIL = $_POST['perfil'];
$ESTADO = $_POST['estado'];

$sql= "UPDATE usuarios SET NOMBREUSU='$NOMBREUSU', APELLIDOUSU='$APELLIDOUSU', USUARIO='$USUARIO', PASSWORDU='$PASSWORDU', PERFIL='$PERFIL', ESTADO='$ESTADO' WHERE ID_USUARIOS='$ID_USUARIOS'";
$query=mysqli_query($con, $sql);
if($query){
    Header("Location: index.php");
};

?>