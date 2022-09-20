
<?php include_once "header.php";
include_once('funciones.php');
include_once "consultas.php";
$m=0;
if(isset($_POST["month"])) {
        $m=$_POST["month"];
       if(isset($_POST["anio"])){
            $ventasArt = informeArtVentaMes($_POST["month"],$_POST["anio"]);
			$_SESSION["g-mes"][2] =TRUE;
			$_SESSION["g-mes"][0] = $_POST["month"];
			$_SESSION["g-mes"][1] =$_POST["anio"];
       }else{
            $ventasArt = informeArtVentaMes($_POST["month"],date("Y"));
			$_SESSION["g-mes"][2] =TRUE;

			$_SESSION["g-mes"][0] = $_POST["month"];
			$_SESSION["g-mes"][1] =date("Y");

       }
	}else
	{
		echo date("Y");
		$ventasArt = informeArtVentaMes(date('m'),date("Y"));		
		$_SESSION["g-mes"][2] =TRUE;
		$_SESSION["g-mes"][0] =date('m');
		$_SESSION["g-mes"][1] =date("Y");

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
       

            <Form method="POST" action="informe_ArtVentaMes.php">
			
                <div class="form-group">
                     <input required type="text" name="anio" id="anio" value=<?php echo date("Y");?>>
                     <select id="month"  name="month" onchange="this.form.submit()">
                        <option value="01" <?php if($m=="01"){ echo "selected";}?>>Enero</option>
                        <option value="02" <?php if($m=="02"){ echo "selected";}?>>Febrero</option>
                        <option value="03" <?php if($m=="03"){ echo "selected";}?>>Marzo</option>
                        <option value="04" <?php if($m=="04"){ echo "selected";}?>>Abril</option>
                        <option value="05" <?php if($m=="05"){ echo "selected";}?>>Mayo</option>
                        <option value="06" <?php if($m=="06"){ echo "selected";}?>>Junio</option>
                        <option value="07" <?php if($m=="07"){ echo "selected";}?>>Julio</option>
                        <option value="08" <?php if($m=="08"){ echo "selected";}?>>Agosto</option>
                        <option value="09" <?php if($m=="09"){ echo "selected";}?>>Septiembre</option>
                        <option value="10" <?php if($m=="10"){ echo "selected";}?>>Octubre</option>
                        <option value="11" <?php if($m=="11"){ echo "selected";}?>>Noviembre</option>
                        <option value="12" <?php if($m=="12"){ echo "selected";}?>>Diciembre</option>	
                    </select>
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
						<input type="hidden" name="d" value="InfArtMes">
						<input type="hidden" name="m" value="<?php echo $m;?>">
						<input type="hidden" name="a" value="<?php echo date("Y");?>">

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