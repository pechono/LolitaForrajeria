<?php
include_once "funciones.php";
if (isset($_POST["id"])){
    $id=$_POST["id"];
  //  abrirSuelto($id);
    echo "entro".$id;
  $pI=$_POST["precioinicial"];
  $pF=$_POST["preciofinal"]; 
  $productos =obtenerProductos(); 
  $detalles="Articulo ".$id ." Venta Suelto";
  $p=0;
  foreach ($productos as $producto) 
  { 
    if($id==$producto->id_articulo){ 
    $active=1;
    $p= $producto->presentacion;
    guardarProducto($producto->nombre, $producto->id_tipoArt, $pI,$pF,$producto->limites_descuento,$producto->id,$producto->caducidad,$detalles,$active,$producto->presentacion,$producto->id_unidad);
    $productos = obtenerArticulo();
    foreach ($productos as $producto)
    { 
     $idArt=$producto->id_articulo;
    
    }
            
    }
  }

  guardarstock($idArt, $p,1, 1);

   header("Location:suelto.php");
}else{
    echo("no");
  //  header("Location:suelto.php");
}





?>