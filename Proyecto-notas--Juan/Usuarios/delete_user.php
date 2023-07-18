<?php

include("connection.php");
$con = connection();

$ID_USUARIOS=$_GET["ID_USUARIOS"];

$sql="DELETE FROM usuarios WHERE ID_USUARIOS='$ID_USUARIOS'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>