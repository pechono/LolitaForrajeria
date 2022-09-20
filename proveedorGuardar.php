<?php
include_once "funciones.php";




if (isset($_POST["empresa"]) && isset($_POST["rubro"]) && isset($_POST["telefono"]) && isset($_POST["mail"]) && isset($_POST["direccion"]) && isset($_POST["localidad"])) {
    //agregarProductoAlCarrito($_POST["id_producto"], $_POST["cant_art"]);
    insertarProveedores($_POST["empresa"],$_POST["telefono"],$_POST["rubro"],$_POST["direccion"],$_POST["localidad"],$_POST["mail"]);

  
    header("Location: proveedorCargar.php");
  
}else{
//insertarProveedores($_POST["empresa"],$_POST["telefono"],$_POST["rubro"],$_POST["direccion"],$_POST["localidad"],$_POST["mail"]);

  
  header("Location: proveedorCargar.php");
}