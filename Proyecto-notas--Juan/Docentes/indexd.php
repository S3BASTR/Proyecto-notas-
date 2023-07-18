<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM docentes";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Agregar docentes </title>
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
        <a class="active" href="../Estudiantes/indexes.php">Estudiantes</a>
        <a class="active" href="../Materias/index_materias.php">Materias</a>
        <a class="active" href="../Inicio.php">Cerrar sesión</a>
    </div>

    <div class="users-form">
        <h1>Crear docente</h1>
        <form action="insert_docentes.php" method="POST" class="Formu">
            <input class="info" type="text" name="named" placeholder="Nombre">
            <input class="info" type="text" name="lastnamed" placeholder="Apellido">
            <input class="info" type="number" name="documentd" placeholder="Documento">
            <input class="info" type="email" name="emaild" placeholder="Correo">
            <input class="info" type="text" name="materiasd" placeholder="Materias">

            <label for="Perfil">Perfil</label>
            <select id="Perfil" class="campoP" name="perfild">
                <option value="Administrador">Administrador</option>
                <option value="Docente">Docente</option>
            </select>

            <label for="Estado">Estado</label>
            <select id="Estado" class="campoE" name="estadod">
                <option value="Activo">Activo</option>
                <option value="No Activo">No Activo</option>
            </select>

            <input class="btnA" type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2> Docentes registrados </h2>
        <table class="tablita">
            <thead class="CamposInf">
                <tr class= "InfoCam">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Materias</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID_DOCENTE'] ?></th>
                        <th><?= $row['NOMBRED'] ?></th>
                        <th><?= $row['APELLIDOD'] ?></th>
                        <th><?= $row['DOCUMENTOD'] ?></th>
                        <th><?= $row['CORREOD'] ?></th>
                        <th><?= $row['MATERIAD'] ?></th>
                        <th><?= $row['PERFILD'] ?></th>
                        <th><?= $row['ESTADOD'] ?></th>
                        <th><a href="updatedoc.php?ID_DOCENTE=<?= $row['ID_DOCENTE'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_docentes.php?ID_DOCENTE=<?= $row['ID_DOCENTE'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>