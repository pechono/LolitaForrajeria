<?php  
include_once "funciones.php";
if (!isset($_POST["id_a"])) {
       
        exit("Faltan datos");
    }
     echo ($_POST["id_a"]). "-----";
    $productos =obtenerProductos(); 
    foreach ($productos as $producto) 
    { 
        if($producto->id_articulo==$_POST["id_a"])
        {
            $cadena=$producto->detalles;
            $p=$producto->presentacion;
            $c=$producto->cantidad;
        }
    }
        $nro="";
        for($i=0;$i<strlen($cadena);$i++)
        { 
                  if(is_numeric($cadena[$i])){
            $nro=$nro . strval($cadena[$i]);
            }
        }
    $sk=stock();
    $can=0;
    foreach($sk as $s){
        if(intval($nro)==$s->id_stock){
        $can=$s->cantidad;
        echo "cantidad" .$can;
    }
    }

    cambiarStock(intval($nro),$can-1);

    cambiarStock($_POST["id_a"],$p+$c);

    header("Location: stockModificar.php");
    ?>
