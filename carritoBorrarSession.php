<?php
include_once "funciones.php";
unset($_SESSION["carrito"]);
$_SESSION["carrito"][0]=array(0,0);
header("location: app.php");
die();
?>