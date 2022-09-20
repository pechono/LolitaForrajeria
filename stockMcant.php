
<?php 


if (!isset($_POST["id_producto"]) || !isset($_POST["stock"]) ) {
        echo $_POST["d"];
        exit("Faltan datos");
    }
    //echo $_POST["stock"];
    include_once "funciones.php";
    cambiarStock($_POST["id_producto"], $_POST["stock"]);
    header("Location: stockModificar.php");
    ?>
