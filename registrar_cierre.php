<?php
include_once "funciones.php";
$usuario=$_POST["usuario"];
$turno=$_POST["turno"];
$fecha=$_POST["fecha"];


if(isset($_POST["efectivo"])|| $_POST["efectivo"]==""){
    $efectivo=0; 
} else{
   $efectivo=$_POST["efectivo"];
}
if(!isset($_POST["tarjeta"])|| $_POST["tarjeta"]==""){
    $tarjeta=0;
} else{
   $tarjeta=$_POST["tarjeta"]; 
}
if(!isset($_POST["corriente"])|| $_POST["corriente"]==""){
   $corriente=0;
} else{
     $corriente=$_POST["corriente"];
}

if(!isset($_POST["canje"]) || $_POST["canje"]==""){
   $canje=0;
} else{
     $canje=$_POST["canje"];
   
}
if(!isset($_POST["pagoc"])|| $_POST["pagoc"]==""){
  $pago=0;  
} else{
    $pago=$_POST["pagoc"];
}

if(!isset($_POST["ganancia"])|| $_POST["ganancia"]==""){
    $ganancia=0;
} else{
    $ganancia=$_POST["ganancia"];
}
if(!isset($_POST["total"])|| $_POST["total"]==""){
  $total=0;  
} else{
    $total=$_POST["total"];
}
//echo "--usu ".$usuario."-- tur ".$turno."--f ".$fecha."-- e ".$efectivo."--t ".$tarjeta."--c ".$corriente."-- j ".$canje."-- p". $pago,$total."-- g".$ganancia;
ingresarCierre($usuario,$turno,$fecha,$efectivo,$tarjeta, $corriente,$canje, $pago,$total,$ganancia);
header("Location: salir.php");
?>
