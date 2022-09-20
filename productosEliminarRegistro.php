<?php
include_once "funciones.php";
//include_once('header.php'); 

if( $_POST["msj"]>0 )
{       $id= $_POST["msj"];
        echo $id;
        eliminarProducto($id);
       
       echo  '<br><a href="productosEliminar.php" class="btn btn-success btn-sm">entro y elimino </a>';

       header("location: productosEliminar.php");
   
}
else {
   
    echo '<br><a href="productosEliminar.php" class="btn btn-success btn-sm">no entro </a>';
 
     header("location: productosEliminar.php");
}
?>