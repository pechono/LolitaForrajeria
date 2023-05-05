<?php
include_once("funciones.php");
if (isset($_POST['cant_art']) && isset($_POST['id_producto'])) {
    $id=$_POST["id_producto"];
    $cantidad=$_POST["cant_art"];
    
    $fila[0]=$id;
    $fila[1]=$cantidad;
    $var=FALSE;
    foreach ($_SESSION["carrito"] as list($a, $b)) {
        echo $a;
        if($a==$id){
            $var=TRUE;    
        }
    }
    if (!$var){
        echo "jjjjjjjj". count($_SESSION["carrito"]);
        array_push($_SESSION['carrito'],array($id,$cantidad));
    }
    if($_POST["flex"]=="flex"){
        header('Location: app-flex.php');
        die();
    }else{
         header('Location: app.php');
         die();
    }
    
    
}else{
    header('Location: app.php');
    die();  
}
?>