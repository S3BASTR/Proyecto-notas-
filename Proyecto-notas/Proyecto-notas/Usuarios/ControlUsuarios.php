<?php
if ($_POST['Email'] =="Miguel" && $_POST['contrasena'] =="12345") 
{
    Session_start();
    //Declarar las variables de sesion
    $_SESSION['usuario'] =$_POST['Email'];
    $_SESSION['validacion'] = true;
    $_SESSION['start']= time();
    $_SESSION['expire'] = $_SESSION['start'] + (1*60);

    header("Location: index.php");
}else 
{
echo "<script>
alert('Datos incorrectos');
window.location = 'index.php';
</script>";
}


?>