<?php
include_once"funciones.php";

if (isset($_POST["pago"]) && isset($_POST["id"])) {
    $pago=$_POST["pago"];
    $id_cliente=$_POST["id"];
    $op=0;
    $monto=0;
    $monto=-$pago;
    $fecha=date('Y-m-d');
    $detalles="entrega";
    $usuario=$_SESSION["idUsuario"];
    $turno=$_SESSION["turno"];
    
    if( $_POST["msj"]==1){
    cuentaCoriente($op, $monto,$fecha,$detalles,$id_cliente, $usuario,$turno);
    ?> 
        <script language=javascript>
                    function frmSubmit(){
                    document.myform.submit();
                    }
            </script>

        <body onload="frmSubmit();">
        <form name="myform" method="post" action="cuentaCorriente.php">
        <input type="hidden" name="cliente" value="<?php echo $id_cliente; ?>">
        </form>
        </body>
        <?php
    }else{
        header("Location: cuentaCorriente.php?x=0");

    }
}


?> 
