<?php
include_once "funciones.php";
if (isset($_POST["categoria"]) && isset($_POST["detalles"])) {
    //agregarProductoAlCarrito($_POST["id_producto"], $_POST["cant_art"]);
    insertarCategoria($_POST["categoria"],$_POST["detalles"]);

  
    header("Location: categoriaCargar.php");
  
}else{
//insertarProveedores($_POST["empresa"],$_POST["telefono"],$_POST["rubro"],$_POST["direccion"],$_POST["localidad"],$_POST["mail"]);

  
  header("Location: categoriaCargar.php");
}