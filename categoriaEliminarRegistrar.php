<?php
include_once("funciones.php");
if( $_POST["msj"]>-1)
{
   
        $id=$_POST["msj"];
        eliminarCategoria($id);
    header("location: categoriaEliminar.php");
    
}else{
    //header("location: cateroriaEliminar.php"); 
}
?>