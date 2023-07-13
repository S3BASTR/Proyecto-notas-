
<?php
include("connectionMateria.php");
$con = connection();

$sql = "SELECT * FROM MATERIAS";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuarios</title>
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
margin-top: 50px;
text-align: center;
}
        
.users-form h1 {
font-size: 24px;
}
        
.users-form input[type="text"],
.users-form input[type="password"],
.users-form select {
display: block;
margin: 10px auto;
width: 200px;
padding: 5px;
}
        
.users-table {
margin-top: 50px;
}
        
.users-table h2 {
font-size: 24px;
}
        
.users-table table {
width: 100%;
border-collapse: collapse;
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
        <a class="active" href="../Inicio.html">Cerrar sesión</a>
    </div>

    <div class="users-form">
        <h1>MATERIA</h1>
        <form action="insert_Materia.php" method="POST" class="Formu">
            <input class="info" type="text" name="namem" placeholder="Materia">

            <input class="btnA" type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table class="tablita">
            <thead class="CamposInf">
                <tr class= "InfoCam">
                    <th>MATERIA</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID_MATERIA'] ?></th>
                        <th><?= $row['MATERIA'] ?></th>

                        <th><a href="updateMateria.php?ID_MATERIA=<?= $row['ID_MATERIA'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_Materia.php?ID_MATERIA=<?= $row['ID_MATERIA'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>