
<?php
$active = filter_input(INPUT_POST, 'proActive', FILTER_VALIDATE_BOOLEAN);
if (!isset($_POST["unidad"]) ||!isset($_POST["presentacion"]) ||!isset($_POST["nombre"]) || !isset($_POST["categoria"]) || !isset($_POST["precioinicial"])|| !isset($_POST["preciofinal"]) || !isset($_POST["descuento"])|| !isset($_POST["unidadcantidad"])|| !isset($_POST["detalles"])|| !isset($_POST["caducidad"])) {
    echo $_POST["nombre"]." cat " . $_POST["categoria"]." inic " . $_POST["precioinicial"]." final " .$_POST["preciofinal"] ." dess " .$_POST["descuento"]." unid ".$_POST["unidadcantidad"]." det ".$_POST["detalles"],
    
    
    exit("Faltan datos");
}
if (!isset($_POST['proActive'])) {
$active = 0;
}
include_once "funciones.php";
guardarProducto($_POST["nombre"], $_POST["categoria"], $_POST["precioinicial"],$_POST["preciofinal"],$_POST["descuento"],$_POST["unidadcantidad"],$_POST["caducidad"],$_POST["detalles"],$active,$_POST["presentacion"],$_POST["unidad"]);
$productos = obtenerProductos();
           foreach ($productos as $producto)
           {
            $idArt=$producto->id_articulo;
           }

historialPrecio($idArt,$_POST["precioinicial"],$_POST["preciofinal"]);
header("Location: stock.php?stock=1");

