<?php
include_once "funciones.php";
if (isset($_POST["tipo"]) && isset($_POST["detalles"]) && isset($_POST["ctg"]) ) {
    modificarCategoria($_POST["ctg"],$_POST["tipo"],$_POST["detalles"]);

  
    header("Location: categoriaModificar.php");
  
}else{
//insertarProveedores($_POST["empresa"],$_POST["telefono"],$_POST["rubro"],$_POST["direccion"],$_POST["localidad"],$_POST["mail"]);

  //header("Location: categoriaModificar.php");
  echo "nopo";
}?>