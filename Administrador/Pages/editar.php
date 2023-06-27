<?php
require_once('../../Conexion.php');
include_once('../Modelo/administrador.php');
$Id = $_Get['Id'];

$admin = new Administrador();
$row = $admin->getidad($Id);
if ($row) {
}
?>