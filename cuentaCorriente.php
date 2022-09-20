<?php include_once "header.php" 
//include_once "funciones.php";
?>
<section class="contenido wrapper ">
    <div class="container position-relative card">
        <div  class="card-header">
            <label><h3>Cuenta Corriente</h3></label>
        </div>
        <div  class="card-body">
            <form action=cuentaCorriente.php method="POST" onclick>
            <select name="cliente" onchange="this.form.submit()">
                    <?php 
                    $total="--" ;
                    $cte="--" ;
                 echo "sdfkgahsñdogihLOJEFO"; 
                    $cuentaCorriente=obtener_cuentaCorriente();
                    foreach ($cuentaCorriente as $cC )
                    {
                        if(!isset($_POST["cliente"] ))
                        { ?>
                             <option value="<?php echo $cC->id_cliente; ?>" ><?php echo $cC->apellido .", ". $cC->nombre; ?></option>
                        
                          <?php echo "sdfkgahsñdogihLOJEFO"; 
                        }
                        else
                        {  
                            if ($_POST["cliente"]==$cC->id_cliente)
                            { ?>
                            <option value="<?php echo $cC->id_cliente; ?>" selected ><?php echo $cC->apellido  .", ". $cC->nombre; ?> </option>
                             <?php
                                 $total=$cC->total ;
                                 $cte=$cC->apellido  .", ". $cC->nombre; 
                                 $cliente_id= $cC->id_cliente;
                            }
                            else
                            {?>
                                <option value="<?php echo $cC->id_cliente; ?>" ><?php echo $cC->apellido  .", ". $cC->nombre; ?> </option>
                            <?php
                            }
                        }
                     }
                        ?>
            </select>
            </form>
        </div>
    </div>    
</section>    

<section class=" ">
    <div class="container position-relative card">
        <script>
                function alerta()
                    {
                    var mensaje;
                    var opcion = confirm("Desea Realizar la Venta");
                    if (opcion == true) {
                        mensaje = "1";
                    } else {
                        mensaje = "0";
                    }
                    document.getElementById("msj").value = mensaje;
                }
        </script>    
        <form action="cuentaCorrientePago.php" method="post">
            <input type="hidden" name="id" value="<?php echo $cliente_id; ?>">
            <input type="text" name="msj" id="msj" readonly style="visibility:hidden;">
            <table class="table table-striped table-hover">   
                <tr>
                    <th colspan="3" aling="center">Estado de cuenta</th>  
                </tr> 
                <tr>
                    <th align="right" > Cliente:</th>  
                    <td ><?php echo $cte ?></td>
                    <td>
                        <input type="text" name="pago"  style="width:72px; height:30px" >
                        <button class="button is-success" onclick="alerta()">Pagar</button>
                    </td>
                    
                <tr>
                    <th  > Deuda:</th>
                    <td align="left"colspan=2> <?php echo $total ?></td>  
                </tr>
            </table> 
        </form>
    </div>
</section>
<?php include_once "footer.php"; ?>
