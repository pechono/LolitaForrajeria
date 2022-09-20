
<?php
include_once "funciones.php";
if (isset($_POST["id_articulo"]) && isset($_POST["cant_art"]) && $_POST["cant_art"]>=1) {
    agregarProductoAlPedido($_POST["id_articulo"], $_POST["cant_art"]);
    header("Location: pedido.php");

}else{
  exit("No hay id_articulo");
  header("Location: pedido.php");
}