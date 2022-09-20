<!DOCTYPE html>
<html>
<head>
	<title>elementos venddiod</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="librerias/plotly-latest.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						<?php echo "klsdjlbvlozdshloA";
							if (isset($_SESSION["g-total"])) {
								if($_SESSION["g-total"][0]==TRUE)
								{
									
									//.$_SESSION["g-total"][1];
									$_SESSION["g-total"][0] =FALSE;

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
							}					?>
	</div>
					<div class="panel panel-body">
						<div class="row">
							
							<div class="col-sm-8">
								<div id="cargaBarras"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaBarras').load('barras.php');
	});
</script>