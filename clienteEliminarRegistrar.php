<?php
include_once("funciones.php");
if( $_POST["msj"]>-1)
{
   
        $id=$_POST["msj"];
        eliminarCliente($id);
    header("location: clienteEliminar.php");
    
}else{
    //header("location: clienteEliminar.php"); 
}
?>