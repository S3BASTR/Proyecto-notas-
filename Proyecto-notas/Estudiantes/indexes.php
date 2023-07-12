<?php
        include_once('connection.php');
        require_once('metodos.php');

        $me= new consulta();
        $do= new consulta();
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
        <a class="active" href="../Inicio.html">Cerrar sesión</a>
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
        <select name="materiae" class="campo">
            <option>Seleccionar</option>
            <?php
        $mate= $me->getmaterias();
        if($mate!=null){
            foreach($mate as $ma){
                ?>
                <option value="<?php echo$ma['MATERIA']; ?>"> <?php echo$ma['MATERIA'];?></option>
                <?php
            }
        }
        ?>
        </select>
        <label>Docente</label>
        <select name="docentee" class="campo">
            <option>Seleccionar</option>
            <?php
        $doce1= $do->getdocente();
        if($doce1!=null){
            foreach($doce1 as $dc){
                ?>
                <option value="<?php echo $dc['NOMBRED']; ?>"> <?php echo $dc['NOMBRED'];?></option>
                <?php
            }
        }
        ?>
        </select>

        <label>Nota final</label>
        <input type="number" name="notae" class="campo" placeholder="Promedio">
        <label>Fecha de registro</label>
        <input type="datetime-local" name="fechae" class="campo" placeholder="Fecha">
        <input type="submit"  class="submito" value="Ingresar">
    </form>
</div>
</body>
</html>