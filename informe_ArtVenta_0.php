
<?php //include_once "header.php";
include_once('funciones.php');



//include_once "funciones.php";
include_once "consultas.php";
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

$sqlB="SELECT articulo.id_articulo as id,articulo.nombre,articulo.tamanio, precio_inicial ,\n"
    . "     precio_final , sum(venta.cantidad) as totalc, SUM(precio_inicial*venta.cantidad) as totalInicial,\n"
    . "     sum(precio_final*venta.cantidad) as totalFinal, SUM((precio_final*venta.cantidad)-(precio_inicial*venta.cantidad)) as GananciaTotal\n"
    . "     FROM venta INNER join articulo on venta.id_articulo=articulo.id_articulo \n"
    . "     INNER JOIN operacion ON venta.id_operacion =operacion.id_operacion\n"
    . "WHERE ". $fecha ." or " .$articulo . ""
    . " GROUP BY articulo.id_articulo;";

$a=false;
if (!isset($_GET["inf"])){
	$ventas = informeArtVenta();
	$mensaje="Ventas ";
}elseif($_GET["inf"]=="inf"){
	$ventas = informeArtVenta();
	$mensaje="Ventas ";

}elseif($_GET["inf"]=="D"){
	$ventasArt = informeArtVentaDiaria();
	$mensaje="Ventas de Articulos Diarios  ".date('d-m-Y H:i:s');

	
}elseif($_GET["inf"]=="Ms"){
	$ventasArt = informeArtVentaMes();
	$mensaje="Ventas Mensual de Articulos  ".date('M');

}elseif($_GET["inf"]=="Gnr"){
	$ventasArt = informeArtVentaGeneral($sqlB);
	$mensaje="Ventas General De Articulos";
	$a=true;

}

?>



<div class="table">
   <table>

    <tr>

        <th align="center" colspan=3>informes
             de Ventas</th>
    </tr>    
	<form action="informe_ArtVenta.php?inf=Gnr" method="post">
	    <tr>
            <th rowspan="4" align="right"><a href="informe_ArtVenta.php?inf=inf" >Ventas por Articulo</a> </th>
            <td aling="center"><a href="informe_ArtVenta.php?inf=D" >Venta Diaria por Articulo</a></td>
			<td aling="center"><?php 
								if($a==true){
								echo "<input type='text' placeholder='Buscar Articulo' name='articulo'> </td>";
								echo "<td aling='center'><input type='date' placeholder='fecha' name='fecha'></td>";
								}?>
			
			<td aling="center" rowspan="4" border: #b2b2b2 1px solid>
			<?php 
								if($a==true){
								echo '<button class="button is-success is-large"><i >Buscar</i></button> </td>';
								   } ?>
			
			
		</tr>

        <tr>
            <td aling="center" ><a href="informe_ArtVenta.php?inf=Ms" >Venta Mensual por Articulo</a></td>
			
								
			


        </tr>
		
        <tr>

            <td aling="center"><a href="informe_ArtVenta.php?inf=Gnr" >Venta General de Articulo</a></td>
						

			


        </tr>

		</form>

        </table> 

</div>


<div class="table">
<table cellspacing="0" border="0">

	<colgroup span="9" width="69"></colgroup>
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



<?php include_once"pie.php";