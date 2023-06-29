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
        <title>Editar usuarios</title>

        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .users-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .TituloUU {
            font-size: 24px;
            margin-top: 0;
        }

        form {
            margin-top: 20px;
        }

        .MiniT {
            margin: 10px 0;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .campoP,
        .campoE {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .Submito {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .Submito:hover {
            background-color: #45a049;
        }
    </style>
         
        
</head> 
    <body> 
        <div class="users-form"> 
            <h1 class="TituloUU">Editar usuario</h1> 
            <form action="edit_user.php" method="POST"> 
                <input type="hidden" name="ID_USUARIOS" value="<?= $row['ID_USUARIOS']?>"> 
                <p class="MiniT">Nombre</p> 
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['NOMBREUSU']?>"> 
                <p class="MiniT">Apellido</p> 
                <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['APELLIDOUSU']?>"> 
                <p class="MiniT">Usuario</p> 
                <input type="text" name="username" placeholder="Username" value="<?= $row['USUARIO']?>"> 
                <p class="MiniT">Contraseña</p> 
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
 
                <input class="Submito" type="submit" value="Actualizar"> 
            </form> 
        </div> 
    </body> 
</html>