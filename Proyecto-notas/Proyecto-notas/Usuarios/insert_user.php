<?php
include("connection.php");
$con = connection();

$ID_USUARIOS = null;
$NOMBREUSU = $_POST['name'];
$APELLIDOUSU = $_POST['lastname'];
$USUARIO = $_POST['username'];
$PASSWORDU = $_POST['password'];
$PERFIL = $_POST['perfil'];
$ESTADO = $_POST['estado'];

$sql = "INSERT INTO usuarios VALUES('$ID_USUARIOS ','$NOMBREUSU','$APELLIDOUSU','$USUARIO','$PASSWORDU','$PERFIL','$ESTADO')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>