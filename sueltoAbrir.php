<?php
include_once "funciones.php";
if (isset($_POST["id"])){
    $id=$_POST["id"];
    abrirSuelto($id);
    echo "entro".$id;
   //header("Location:suelto.php");
}else{
    echo("no");
  //  header("Location:suelto.php");
}

?>

