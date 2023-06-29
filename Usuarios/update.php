<?php 
include("connection.php");
$con=connection();

$ID_USUARIOS= $_GET['ID_USUARIOS'];

$sql = "SELECT * FROM usuarios WHERE ID_USUARIOS ='$ID_USUARIOS'";
$query= mysqli_query($con, $sql);
$row= mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title> Editar usuarios </title>
        
    </head>
    <body>
        <div class="users-form">
            <h1 class="TituloUU"> Editar usuario</h1>
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="ID_USUARIOS" value="<?= $row['ID_USUARIOS']?>">
                <p class= "MiniT">Nombre</p>
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['NOMBREUSU']?>">
                <p class= "MiniT">Apellido</p>
                <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['APELLIDOUSU']?>">
                <p class= "MiniT">Usuario</p>
                <input type="text" name="username" placeholder="Username" value="<?= $row['USUARIO']?>">
                <p class= "MiniT">Contraseña</p>
                <input type="text" name="password" placeholder="Password" value="<?= $row['PASSWORDU']?>">

                <label for="Perfil">Perfil</label>
                <select id="Perfil" class="campoP" name="perfil" value="<?= $row['PERFIL']?>">
                <option value="Administrador">Administrador</option>
                <option value="Docente">Docente</option>
                </select>

                <label for="Estado">Estado</label>
                <select id="Estado" class="campoE" name="estado" value="<?= $row['ESTADO']?>">
                <option value="Activo">Activo</option>
                <option value="No Activo">No Activo</option>
                </select>

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>