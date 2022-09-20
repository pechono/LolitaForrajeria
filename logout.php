<?php
include_once "funciones.php";
if( $_POST["msj"]==1){
   // unset($_SESSION["idUsuario"]);
   // unset($_SESSION["turno"]);
   // header("Location: index.php");
    session_destroy();
    echo "si entro"; 
    header("Location: login.php");

}else{

echo "no entro"; 
}
?>