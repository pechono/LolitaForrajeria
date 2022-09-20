<?php

include_once "funciones.php";
if (isset($_POST["id_articulo"])) {
   //exit("No hay id_articulo");
//echo $_POST["id_articulo"];
quitarProductoDelPedido($_POST["id_articulo"]);
# Saber si redireccionamos a tienda o al carrito, esto es porque
# llamamos a este archivo desde la tienda y desde el carrito
header("Location: pedido.php");

}else{
  exit("No hay id_articulo");
  header("Location: pedido.php");
}
