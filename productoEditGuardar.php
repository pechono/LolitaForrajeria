<?php
include_once "funciones.php";
if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["presentacion"])&& isset($_POST["unidad"])&& isset($_POST["categoria"]) && isset($_POST["precioI"])&& isset($_POST["precioF"])&& isset($_POST["unidadv"])&& isset($_POST["limite"])&& isset($_POST["cantidad"])&& isset($_POST["caducidad"])&& isset($_POST["detalles"])) {
  editarProducto($_POST["id"] , $_POST["nombre"], $_POST["presentacion"], $_POST["unidad"],$_POST["categoria"] , $_POST["precioI"], $_POST["precioF"], $_POST["unidadv"], $_POST["limite"], $_POST["cantidad"], $_POST["caducidad"], $_POST["detalles"]);

  header("Location: productosEditar.php");
  
}else
{
  //header("Location: productosEditar.php");
}
  ?>