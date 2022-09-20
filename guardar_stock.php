
<?php
include_once "funciones.php";
if (!isset($_POST["unidad"]) ||!isset($_POST["presentacion"]) ||!isset($_POST["nombre"]) || !isset($_POST["categoria"]) || !isset($_POST["precioinicial"])|| !isset($_POST["preciofinal"]) || !isset($_POST["active"]) || !isset($_POST["unidadcantidad"])|| !isset($_POST["detalles"])|| !isset($_POST["caducidad"])) {
  
  
  exit("Faltan datos");
}
guardarProducto($_POST["nombre"], $_POST["categoria"], $_POST["precioinicial"],$_POST["preciofinal"],$_POST["descuento"],$_POST["unidadcantidad"],$_POST["caducidad"],$_POST["detalles"],$_POST["active"],$_POST["presentacion"],$_POST["unidad"]);
$productos = obtenerArticulo();
           foreach ($productos as $producto)
           { 
            $idArt=$producto->id_articulo;
           
           }




if ( !isset($_POST["cantidad"]) || !isset($_POST["proveedor"]) || !isset($_POST["minimo"])) {
    exit("Faltan datos");
}
guardarstock($idArt, $_POST["cantidad"],$_POST["proveedor"], $_POST["minimo"] );
historialPrecio($idArt,$_POST["precioinicial"],$_POST["preciofinal"]);

header("Location: productos.php");

