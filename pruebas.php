<?php
require_once './model/userModel.php';
require_once './model/conectionModel.php';

$db=(new conection())->conectModel();
$mostrar = new userModel($db);
$mostrar->verificarUsuario("admin");
?>