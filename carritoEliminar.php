<?php
include_once("funciones.php");
$eliminar=[];
$re=0;

if (isset($_POST['redireccionar_carrito'])) 
{
    $re=1;
}


if (isset($_POST['id_producto'])) {
    $id=$_POST["id_producto"];  
    $i=0;  
    foreach ($_SESSION["carrito"] as list($a, $b)) 
    {
        if($a==$id)
        {
            array_splice($_SESSION["carrito"], $i);       
        }   
        $i++;
    }
        
    if($re==0){
        header('Location: app.php');
    }else{
        header('Location: ventaPreparacion.php');
    }
    header('Location: app.php');
    die();  
}
?>