<?php
include_once("funciones.php");
if( $_POST["msj"]>-1)
{
   
        $id=$_POST["msj"];
        eliminarCliente($id);
    header("location: proveedorEliminar.php");
    
}else{
    header("location: clienteproveedorEliminarEliminar.php"); 
}
?>