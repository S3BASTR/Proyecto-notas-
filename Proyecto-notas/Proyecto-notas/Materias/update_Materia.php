<?php 
include("connectionMateria.php");
$con=connection();

$ID_MATERIA= $_GET["ID_MATERIA"];

$sql = "SELECT * FROM MATERIAS WHERE ID_MATERIA ='$ID_MATERIA'";
$query= mysqli_query($con, $sql);
$row= mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title> Editar Materia </title>
        
    </head>
    <body>
        <div class="users-form">
            <h1 class="TituloUU"> Editar Materia</h1>
            <form action="edit_Materia.php" method="POST">
                <input type="hidden" name="id_materia" value="<?= $row['id_materia']?>">
                <p class= "MiniT">MATERIA</p>
                <input type="text" name="namem" placeholder="MATERIA" value="<?= $row['MATERIA']?>">
                                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>