<?php 
include("connection.php");
$con=connection();

$ID_MATERIA= $_GET['ID_MATERIA'];

$sql = "SELECT * FROM materias WHERE ID_MATERIA ='$ID_MATERIA'";
$query= mysqli_query($con, $sql);
$row= mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Editar Materia </title>

        <style>
    body {
        font-family: Arial, sans-serif;
    }

    .users-form {
        margin: 20px;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .TituloUU {
        color: #333;
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }

    .MiniT {
        color: #555;
        font-size: 16px;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="submit"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        margin-bottom: 10px;
    }

    .SubmM {
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
    }

    .SubmM:hover {
        background-color: #45a049;
    }
</style>

        
    </head>
    <body>
        <div class="users-form">
            <h1 class="TituloUU"> Editar Materia</h1>
            <form action="edit_materias.php" method="POST">
                <input type="hidden" name="ID_MATERIA" value="<?= $row['ID_MATERIA']?>">
                <p class= "MiniT">MATERIA</p>
                <input type="text" name="namema" placeholder="MATERIA" value="<?= $row['MATERIA']?>">

                <input class="SubmM" type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>