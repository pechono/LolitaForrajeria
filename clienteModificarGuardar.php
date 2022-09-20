<?php 
include_once "funciones.php";
if(isset($_POST["apellido"]) && isset($_POST["nombre"]) && isset($_POST["telefono"]) ){

modficarCliente($_POST["cliente"], $_POST["apellido"], $_POST["nombre"], $_POST["telefono"]);
header("Location:clienteModificar.php");
}else{
    header("Location:clienteModificar.php");

}
?>