<!DOCTYPE html>
<html>
<head>
<title>Formulario</title>
</head>
<body>

<h1>Inicio de sesion</h1>
 <form>
    Ingrese su nombre: 
    <input  type="text" placeholder="Escribe tu usuario">
    <br>
   Contrasena:
   <input type= "password" placeholder="Escriba contrasena">
   <br>

   <input type="Submit" value="Enviar">


 </form>




<h1>Lista de usuarios</h1>
<div class="container"></div>
<div col-auto-mt-5></div>
<table class="Table table-dark table-hover">

<tr>
  <th>ID USUARIO</th>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Perfil</th>
  <th>estado</th>
  <th>Actualizar</th>
  <th>Eliminar</th>

</tr>

</table>
<tbody>
  <?php
  require_once('../../Conexcion.php');
  require_once('../../modelos/administrador.php');

  $obj= new Administrador();
  $datos= $obj -> getadmin();

  foreach($datos as $key){}

    
  ?>
  </tbody>



  <td><?php echo $key ['']?></td>
  <td><?php echo $key ['Nombreusu']?></td>
  <td><?php echo $key ['Apellidousu']?></td>
  <td><?php echo $key ['Usuario']?></td>
  <td><?php echo $key ['Perfil']?></td>
  <td><?php echo $key ['Estado']?></td>
  <td><a href="Editar.php?Id=<?php echo $key['id_usuario']?> "class="btn btn-danger">Actualizar</a></td>
  <td><a href="Eliminar.php?Id=<?php echo $key['id_usuario']?> "class="btn btn-danger">Eliminar</a></td>

  </body>
</html>