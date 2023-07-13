<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM estudiantes";
$query = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Estudiante</title>

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

    .Formu {
        margin: 20px;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .textoT h1 {
        color: #333;
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }

    .campo {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        margin-bottom: 10px;
    }

    .submito {
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
    }

    .submito:hover {
        background-color: #45a049;
    }
</style>


</head>
<body>
<div class="navbar">
        <a class="active" href="../Inicio.php">Cerrar sesión</a>
    </div>
    <form action="insert_estudiantes.php" method="POST" class="Formu">
        <div class="textoT"><h1>Agregar Estudiante</h1></div>
        <label>Nombre</label>
        <input type="text" name="nombree" class="campo" placeholder="Ingresar Nombre">
        <label>Apellido</label>
        <input type="text" name="apellidoe" class="campo" placeholder="Ingresar Apellido">
        <label>Documento</label>
        <input type="text" name="documentoe" class="campo" placeholder="Ingresar Documento">
        <label>Correo</label>
        <input type="text" name="correoe" class="campo" placeholder="Ingresar Correo">
        <label>Materia</label>
        <input type="text" name="materiae" class="campo" placeholder="Ingresar Materia">
        <label>Docente</label>
        <input type="text" name="docentee" class="campo" placeholder="Ingresar Docente">
        <label>Nota final</label>
        <input type="number" name="notae" class="campo" placeholder="Promedio">
        <label>Fecha de registro</label>
        <input type="datetime-local" name="fechae" class="campo" placeholder="Fecha">
        <input type="submit"  class="submito" value="Ingresar">
    </form>
</div>
<div class="users-table">
        <h2> Estudiantes registrados </h2>
        <table class="tablita">
            <thead class="CamposInf">
                <tr class= "InfoCam">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Materias</th>
                    <th>Docente</th>
                    <th>Nota final</th>
                    <th>Fecha de registro</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID_ESTUDIANTE'] ?></th>
                        <th><?= $row['NOMBREE'] ?></th>
                        <th><?= $row['APELLIDOE'] ?></th>
                        <th><?= $row['DOCUMENTOE'] ?></th>
                        <th><?= $row['CORREOE'] ?></th>
                        <th><?= $row['MATERIAE'] ?></th>
                        <th><?= $row['DOCENTE'] ?></th>
                        <th><?= $row['PROMEDIO'] ?></th>
                        <th><?= $row['FECHA_REGISTRO'] ?></th>

                        <th><a href="updatedoc.php?ID_ESTUDIANTE=<?= $row['ID_ESTUDIANTE']?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_estudiantes.php?ID_ESTUDIANTE=<?= $row['ID_ESTUDIANTE']?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>