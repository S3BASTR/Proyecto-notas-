<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Agregar usuarios </title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');



.navbar {
background: linear-gradient(90deg, rgb(14, 9, 90) 0%, rgb(41, 41, 141) 35%, rgb(62, 63, 163) 100%);
    box-shadow: 0 1px 5px black;
    overflow: hidden;
    display: flex;
    justify-content: space-around ;
    border-radius: 10px;
    padding: 15px;
}
.navbar a {
    Font-family: 'poppins',sans-serif;
    float: left;
    display: block;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: large;
}


.navbar a.active{
color: white;

}
.navbar a.active:hover{
    background-color: #e4d2d2;
    color: rgb(0, 0, 0);
    border-radius: 10px;
}
        
.users-form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-top: 0;
        }

        .Formu {
            margin-top: 20px;
        }

        .info {
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

        .btnA {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btnA:hover {
            background-color: #45a049;
        }
        
.users-table th,
.users-table td {
padding: 10px;
text-align: left;
border-bottom: 1px solid #ddd;
}
        
.users-table--edit,
.users-table--delete {
text-decoration: none;
padding: 5px 10px;
border-radius: 3px;
color: #fff;
}
        
.users-table--edit {
background-color: #4CAF50;
}
        
.users-table--delete {
background-color: #f44336;
}
</style>


<body>
    <div class="navbar">
        <a class="active" href="../Docentes/indexd.php">Docentes</a>
        <a class="active" href="../Estudiantes/indexes.php">Estudiantes</a>
        <a class="active" href="../Materias/index_materias.php">Materias</a>
        <a class="active" href="../Inicio.html">Cerrar sesión</a>
    </div>

    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST" class="Formu">
            <input class="info" type="text" name="name" placeholder="Nombre">
            <input class="info" type="text" name="lastname" placeholder="Apellidos">
            <input class="info" type="text" name="username" placeholder="Username">
            <input class="info" type="password" name="password" placeholder="Password">

            <label for="Perfil">Perfil</label>
            <select id="Perfil" class="campoP" name="perfil">
                <option value="Administrador">Administrador</option>
                <option value="Docente">Docente</option>
            </select>

            <label for="Estado">Estado</label>
            <select id="Estado" class="campoE" name="estado">
                <option value="Activo">Activo</option>
                <option value="No Activo">No Activo</option>
            </select>

            <input class="btnA" type="submit" value="Agregar">
        </form>
    </div>


    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table class="tablita">
            <thead class="CamposInf">
                <tr class= "InfoCam">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID_USUARIOS'] ?></th>
                        <th><?= $row['NOMBREUSU'] ?></th>
                        <th><?= $row['APELLIDOUSU'] ?></th>
                        <th><?= $row['USUARIO'] ?></th>
                        <th><?= $row['PASSWORDU'] ?></th>
                        <th><?= $row['PERFIL'] ?></th>
                        <th><?= $row['ESTADO'] ?></th>
                        <th><a href="update.php?ID_USUARIOS=<?= $row['ID_USUARIOS'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?ID_USUARIOS=<?= $row['ID_USUARIOS'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>
