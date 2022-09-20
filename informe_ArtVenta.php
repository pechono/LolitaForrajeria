
<?php include_once "header.php";
//include_once('funciones.php');
include_once "consultas.php";
$m=0;
$con=0;
//----------------------------------------
if (!isset($_POST["articulo"]) || $_POST["articulo"]=="" ){
    $articulo="1=2";
    $con++;
}else{
  
    $articulo ="articulo.nombre like '%".$_POST["articulo"]."%'";
}


if (!isset($_POST["fecha"]) || $_POST["fecha"]==""){
    $fecha='1=2';
	$con++;


}else{
    $fecha="operacion.fecha='".$_POST["fecha"]."'";
}



$a=false;
if (!isset($_GET["inf"])){
	$ventasArt = informeArtVentaI();
	$mensaje="Ventas ";
}elseif($_GET["inf"]=="inf"){
	$ventasArt = informeArtVentaI();
	$mensaje="Ventas ";

}elseif($_GET["inf"]=="D" ){
	$ventasArt = informeArtVentaDiaria();
	$mensaje="Ventas de Articulos Diarios  ".date('d-m-Y H:i:s');

	
}elseif($_GET["inf"]=="Ms" )
{	if(isset($_POST["month"]))
	{	
		$m=$_POST["month"];
		$ventasArt = informeArtVentaMes($_POST["month"]);
		$mensaje="Ventas Mensual de Articulos  ".date('M');
	}else
	{
		$ventasArt = informeArtVentaMes(date('m'));
		$mensaje="Ventas Mensual de Articulos  ".date('M');
	}	

}elseif($_GET["inf"]=="Gnr"){
	$ventasArt = informeArtVentaGeneral($fecha,$articulo);
	$mensaje="Ventas General De Articulos";
	$a=true;

}
if (!isset($_POST["articulo"]) || $_POST["articulo"]=="" ){
    $articulo="1=2";
    $con++;
}else{
  
    $articulo ="articulo.nombre like '%".$_POST["articulo"]."%'";
}


if (!isset($_POST["fecha"]) || $_POST["fecha"]==""){
    $fecha='1=2';
	$con++;


}else{
    $fecha="operacion.fecha='".$_POST["fecha"]."'";
}




if (!isset($_POST["inf"])){
	$ventasArt = informeArtVentaI();
	$mensaje="Ventas ";
}elseif($_POST["inf"]=="inf"){
	$ventasArt = informeArtVentaI();
	$mensaje="Ventas ";

}elseif($_POST["inf"]=="D" ){
	$ventasArt = informeArtVentaDiaria();
	$mensaje="Ventas de Articulos Diarios  ".date('d-m-Y H:i:s');

	
}elseif($_POST["inf"]=="Ms" )
{	if(isset($_POST["month"]))
	{	
		$m=$_POST["month"];
		$ventasArt = informeArtVentaMes($_POST["month"]);
		$mensaje="Ventas Mensual de Articulos  ".date('M');
	}else
	{
		$ventasArt = informeArtVentaMes(date('m'));
		$mensaje="Ventas Mensual de Articulos  ".date('M');
	}	

}elseif($_POST["inf"]=="Gnr"){
	$ventasArt = informeArtVentaGeneral($fecha,$articulo);
	$mensaje="Ventas General De Articulos";
	$a=true;

}
?>
<section class="contenido wrapper ">
    <div class="container position-relative card" >
		<div class="card-header">
			<h3>informes de Ventas</h3>
			<?php //appInformeArticuloVent();
            appInformeArticuloVent(); 
			echo "<br> mes".$m;
			
			?>
		</div>
		<table class="table table-striped table-hover">
            <Form method="POST" action="informe_ArtVenta.php">
			
			<div class="form-group">
			<input type="text" name="amio" id="anio" value=<?php echo date("m")?>>
				<select id="month" class="custom-select" name="month" onchange="this.form.submit()">
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

			<?php 
            if($a==true){ ?>
            <form action="informe_ArtVenta.php?inf=Gnr" method="post">
                <tr>
                    <td aling="center">
                        <input type='text' placeholder='Buscar Articulo' name='articulo'> </td>
                        <td aling='center'><input type='date' placeholder='fecha' name='fecha'></td>    
                    <td aling="center" rowspan="4" border: #b2b2b2 1px solid>
                        <button class="button is-success is-large"><i >Buscar</i></button> </td>
                </tr>
            </form> 
                <?php } ?>
        </table> 

</div>


<div class="container position-relative card" >
		<table class="table table-striped table-hover">

	<tr>
		<th colspan=9 align="center"><?php echo $mensaje;?>	</th>
	</tr>
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