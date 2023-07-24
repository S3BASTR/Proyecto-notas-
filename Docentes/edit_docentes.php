<?php

include("connection.php");
$con = connection();

$ID_DOCENTE = $_POST["ID_DOCENTE"];
$NOMBRED = $_POST['named'];
$APELLIDOD = $_POST['lastnamed'];
$DOCUMENTOD = $_POST['documentd'];
$CORREOD = $_POST['emaild'];
$MATERIAD = $_POST['materiasd'];
$PERFILD = $_POST['perfild'];
$ESTADOD = $_POST['estadod'];

$sql= "UPDATE docentes SET NOMBRED='$NOMBRED', APELLIDOD='$APELLIDOD', DOCUMENTOD='$DOCUMENTOD', CORREOD='$CORREOD', MATERIAD='$MATERIAD', PERFILD='$PERFILD', ESTADOD='$ESTADOD' WHERE ID_DOCENTE='$ID_DOCENTE'";
$query=mysqli_query($con, $sql);
if($query){
    Header("Location: indexd.php");
};

?>