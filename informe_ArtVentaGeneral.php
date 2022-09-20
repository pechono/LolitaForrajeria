
<?php include_once "header.php";
include_once('funciones.php');
include_once "consultas.php";
$m=0;
$fI="";
$fF="";
if(isset($_POST["fInicio"])  && isset($_POST["fFinal"])) 
{
    $fI=$_POST["fInicio"];
    $fF=$_POST["fFinal"];
    $_SESSION["g-i-f"][2]=TRUE;
    $_SESSION["g-i-f"][0]=$fI;
    $_SESSION["g-i-f"][1]= $fF;


    $ventasArt=informeArtVentaGeneralEF($fI,$fF);

       
}else	
{
	$ventasArt = informeArtVentaMes(date('m'),date("Y"));		
}	

?>
<section class="contenido wrapper ">
    <div class="container position-relative card" >
		<div class="card-header">
			<h3>informes de Ventas</h3>
			<?php 
            appInformeArticuloVent(); 
			
			?>
		</div>
		<table class="table table-striped table-hover">
       
            <?php   echo $fI;?>
            <Form method="POST" action="informe_ArtVentaGeneral.php">
			
                <div class="form-group">
                     <input type="date" name="fInicio" value="<?php  if(isset($_POST["fInicio"])){ echo $_POST["fInicio"];} ?>">
                     <input type="date" name="fFinal" value="<?php  if(isset($_POST["fFinal"])){ echo $_POST["fFinal"];}  ?>">
                    <button class="btn btn-primary btn-sm">Consulta</button>
                </div>
		    </Form>  
        </table> 
</div>


<div class="container position-relative card" >
	<table class="table table-striped table-hover">

		<thead class="thead-light">
			<tr>
				<th>
					<form action="mostrarGrafico.php" method="post"target="_blank" >
						

						<button class="btn btn-primary">Grafico </button>
					</form>
				</th>
			</tr>
		</thead>
		
	<tr>

		<td align="left" valign=bottom>id</td>
		<td align="left" valign=bottom><font>Articulo</td>
		<td align="left" valign=bottom><font>Presentacion</td>
		<td align="left" valign=bottom><font>Precio Inicial</td>
		<td align="left" valign=bottom><font>Precio Final</td>
		<td align="left" valign=bottom><font>Cantidad Vendida</td>
		<td align="left" valign=bottom><font>Venta precio Inicial</td>
		<td align="left" valign=bottom><font>Venta Precio Final</td>
		<td align="left" valign=bottom><font>Ganancia Marginañ</td>

		
	</tr>
<?php

//$ventas = informeVenta();
$bd = obtenerConexion();
iniciarSesionSiNoEstaIniciada();


foreach ($ventasArt as $venta) {
       
?>
	
	<tr>
		<td  align="left" valign=bottom><?php echo $venta->id?></td>
		<td align="left" valign=bottom><?php echo $venta->nombre?></td>
		<td align="left" valign=bottom><?php echo $venta->tamanio;?></td>
		<td align="left" valign=bottom><?php echo $venta->precio_inicial;?></td>
		<td align="left" valign=bottom><?php echo $venta->precio_final;?></td>
		<td align="left" valign=bottom><?php echo $venta->totalc;?></td>

		<td align="left" valign=bottom><?php echo $venta->totalInicial;?></td>
		<td align="left" valign=bottom><?php echo $venta->totalFinal;?></td>
		<td align="left" valign=bottom><?php echo $venta->GananciaTotal;?></td>

		
	</tr>
    <?php } ?>

</table>
</div>
</section>
<?php include_once"footer.php";