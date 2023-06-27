<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pagina de inicio </title>
    <link rel="stylesheet" href="../../CSS\estilosbarran.css">
    
</head>
<body>

<div class="navbar">
    <a class="active" href="#"> Docentes </a>
    <a class="active" href="#"> Estudiantes </a>
    <a class="active" href="#"> Materias </a>
    <a class="active" href="#"> Cerrar sesión </a>
</div>
<br>
<h1> Lista de usuarios </h1>
<div class="container">
    <div col-auto-mt-5>
        <table class="table table-dark table-hover">
            <tr>
                <th>ID USUARIO</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>USUARIO</th>
                <th>ESTADO</th>
                <th>ACTUALIZAR</th>
                <th>ELIMINAR</th>
            </tr>

            <tbody>
                <?php
                require_once('../../Conexion.php');
                require_once('../Modelo/administrador.php');

                $obj = new Administrador();
                $datos = $obj->getadmin();
                foreach ($datos as $key) {
                
                
                ?>

                <tr>
                    <td><?php echo $key ['ID_USUARIOS']?></td>
                    <td><?php echo $key ['NOMBREUSU']?></td>
                    <td><?php echo $key ['APELLIDOUSU']?></td>
                    <td><?php echo $key ['USUARIO']?></td>
                    <td><?php echo $key ['PERFIL']?></td>
                    <td><?php echo $key ['ESTADO']?></td>
                    <td><a href="editar.php?Id=<?php echo $key["ID_USUARIOS"]?>"class="">Actualizar</a></td>
                    <td><a href="eliminar.php?Id=<?php echo $key["ID_USUARIOS"]?>"class="">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
    
    </table>
</div>
    
</body>
</html>