<?php
include_once("funciones.php");
if(!isset($_POST["preciofinal"]) && !isset($_POST["precioinicial"]) && !isset($_POST["id"])){
    echo "algo salio mal";
}else
{
    $id=$_POST["id"];

    $pI=$_POST["precioinicial"];
    $pF=$_POST["preciofinal"];
    cambiarPrecio($id,$pI,$pF);
    historialPrecio($id,$pI,$pF);
    header("Location: stockCambiarPrecio.php");


}



?>