
<?php
include_once('header.php'); 
//include_once('funciones.php'); 

if( $_POST["msj"]==1)
{

        if (!isset($_POST["total"]) || !isset($_POST["desc"]) || !isset($_POST["tipov"])|| !isset($_POST["cliente"]) ) 
        {
                echo $_POST["d"];
                exit("Faltan datos");
        }else
        {
                if(!isset($_POST["detallesdes"]) || !isset($_POST["detallesop"]))
                {
                        $detallesop="-";    
                        $detallesdes="-";
                }

                $detallesop=$_POST["detallesop"];    
                $detallesdes=$_POST["detallesdes"];
                $tipov=$_POST["tipov"];
                $desc=$_POST["desc"];
                $cliente=$_POST["cliente"];
                $c=$_POST["cliente"];
        
                $t =$_POST["total"];
                $bd = obtenerConexion();
                $idSesion = $_SESSION["idUsuario"];
               // foreach ($_SESSION["carrito"] as list($a, $b)) 
               // {
               //         $t =$t + $a*$b;
               //         echo $b;
               // }    
                
                //$t=$t-$desc;je
                $t=$t-$desc;

                $hoy=date('Y-m-d');
                $turno=$_SESSION["turno"];
                $sentencia = $bd->prepare("INSERT INTO operacion (id_operacion, id_usuario, venta, fecha, descuento, detalle, id_tipoVenta, detalles, id_cliente, turno) VALUES (Null,?,?,?,?,?,?,?,?,?)");
                $sentencia->execute([$idSesion, $t, $hoy,$desc,$detallesdes,$tipov,$detallesop,$cliente,$turno]);

                $inset_op = operacion();
                $bd = obtenerConexion();
                iniciarSesionSiNoEstaIniciada();
                $op=0;
                foreach ($inset_op as $operacion_string) 
                {
                        $op=$operacion_string->id_operacion;
                }
                $cant=0;
                $id=0;
                foreach ($_SESSION["carrito"] as list($a, $b)) 
                {      $cant=$b;
                        $id=$a;   
                        //echo  " e cantidad". $cant; 
                
                        $stock_array = stock();
                        foreach ($stock_array as $stock_list) 
                        {
                                if($stock_list->id_articulo==$id)
                                {
                                        $cant_stock=$stock_list->cantidad;
                                        $pI=$stock_list->precio_inicial;  
                                        $pF=$stock_list->precio_final;
                               
                
              //  echo  " e cantidad". $cant; 
                $cant_stock_res=$cant_stock-$cant; 
                //echo $cant_stock_res." =cantida stock   ". $cant_stock    - stock" .$cant ."      id". $id;

                $sentencia = $bd->prepare("INSERT INTO `venta` (`id_venta`, `id_articulo`, `cantidad`, `id_operacion`,`precioI`,`precioF`) VALUES (Null, ?, ?, ?,?,?)");
                $sentencia->execute([$id, $cant,$op,$pI,$pF]);
                $sql = "UPDATE `stock` SET `cantidad` = ".$cant_stock_res." WHERE `stock`.`id_articulo` = ".$id;
                $sentencia = $bd->prepare($sql." and 1=?;");
                $var=1;
                $sentencia->execute([$var]);
                 } }
                        }
        }
                 cBorrarSession();
                        if ($_POST["tipov"]==3 ) 
                        {
                                $detalles_c="-";
                                if (!isset($_POST["entrega"]))
                                {
                                        $monto=0;

                                }else
                                {
                                        $monto=$_POST["entrega"];
                                }
                                $m=$t-$monto;
                                cuentaCoriente($op, $m,$hoy,$detalles_c,$c,$idSesion,$turno);  
                        // $op, $monto,$fecha,$detalles,$id_cliente   
                        }?>
                 <section class="contenido wrapper ">
                        <div class="card text-center">
                                <div class="card-header">
                                Desea Imprimir Comprobante?
                                </div>
                                <div class="card-body">
                                        <form action="imprimirVenta.php" method="post" target="_blank">
                                        <input type="hidden" name="op" value="<?php echo $op; ?>">
                                        <button class="btn btn-primary btn-sm">Imprimir</button>
                                          </form> 
                                 </div>
                                
                                
                                <div class="card-footer text-muted">
                                        <form action="app.php" method="post">
                                                <button class="btn btn-primary btn-sm">Realizar otra Venta</button>
                                        </form> 
                                </div>
                        </div>                         
                <section >             
                <?php 

}else{
        include_once "carritoBorrarSession.php";
       //header("Location: app.php");

    }

include_once('footer.php'); 

?>