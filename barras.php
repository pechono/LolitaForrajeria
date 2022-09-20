<?php
$mes=0;
$anio=0;
$datos=array();
	include_once "funciones.php";
	include_once "consultas.php";

	if (isset($_SESSION["g-total"])) {
		if($_SESSION["g-total"][0]==TRUE)
		{
			$datos = informeArtVentaI();
		}
	}
	
	if (isset($_SESSION["g-mes"])) {
		if($_SESSION["g-mes"][2]==TRUE)
		{
			$m=$_SESSION["g-mes"][0];// = $_POST["month"];
			$a=$_SESSION["g-mes"][1];
			$_SESSION["g-mes"][2]=FALSE;
			$datos=informeArtVentaMes($m,$a);// =$_POST["anio"];
		}
	}
	if (isset($_SESSION["g-dia"])) {
		if($_SESSION["g-d"][0]==TRUE){
			$datos = informeArtVentaDiaria();
			$_SESSION["g-d"][0]=FALSE;
			
		}
	}
	if (isset($_SESSION["g-i-f"])) {
		if($_SESSION["g-i-f"][2]==TRUE){
			$I=$_SESSION["g-i-f"][0];
			$F=$_SESSION["g-i-f"][1];
			$datos = informeArtVentaGeneralEF($I,$F);		;

			$_SESSION["g-i-f"][2]=FALSE;
			
		}
	}




	$valoresY=array();//montos
	$valoresX=array();//fechas
	
	foreach ($datos as $dato) 
    {
		$valoresY[]=$dato->totalc;
		$valoresX[]=$dato->id ."-".$dato->nombre;
	}
	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);
 ?>

<div id="graficaBarras"></div>

<script type="text/javascript">
	function crearCadenaBarras(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">

	datosX=crearCadenaBarras('<?php echo $datosX ?>');
	datosY=crearCadenaBarras('<?php echo $datosY ?>');

	var data = [
		{
			x: datosX,
			y: datosY,
			type: 'bar'
		}
	];

	Plotly.newPlot('graficaBarras', data);
</script>
<?php

?>
	