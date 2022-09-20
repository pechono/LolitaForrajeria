<?php
//require('fpdf184/fpdf.php');
include_once "funciones.php";
include_once "imprimirVentaEyP.php";
//require "plantilla.php";

if (!empty($_POST)) {

    $_SESSION["o"]=$_POST["op"];

    $pdf = new PDF("P", "mm", "A4");
    $pdf->AliasNbPages();
    $pdf->AddPage();//añade l apagina / en blanco
    $pdf->SetMargins(20,10,10);
    $pdf->SetAutoPageBreak(true,20);//salto de pagina automatico
    $pdf->SetX(3);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(10, 5,'', 0, 0, "C");
    $pdf->Cell(20, 5,"id", 1, 0, "C");
    $pdf->Cell(60, 5, "Articulo", 1, 0,"C");
    $pdf->Cell(40, 5, "Presentacion", 1, 0);
    $pdf->Cell(20, 5, "Cantidad", 1, 0);
    $pdf->Cell(20, 5, "Precio", 1, 0);
   
  $pdf->Cell(20, 5,"Subtotal", 1, 1); 

    $pdf->SetFillColor(233, 229, 235);//color de fondo rgb
    $pdf->SetDrawColor(61, 61, 61);//color de linea  rgb
    $pdf->SetFont('Arial','',12);
    $op=$_POST["op"];
   
     $op=$_POST["op"];
    $oper=imprimirVenta($op);
    $t=0;
    foreach($oper as $E){
        $pdf->Ln(0.6);
        $pdf->setX(3);
        $sub=$E->cantidad*$E->precioF;
        $t=$t+$sub;
        $pdf->Cell(10, 5,'', 0, 0, "C");
        $pdf->Cell(20, 5, $E->id_articulo, 1, 0, "C");
        $pdf->Cell(60, 5, $E->nombre, 1, 0);
        if($E->suelto==1){
          $pdf->Cell(40, 5, "Suelto", 1, 0);
        }else{
          $pdf->Cell(40, 5, $E->tamanio, 1, 0);
        }
        $pdf->Cell(20, 5, $E->cantidad, 1, 0,"C");
        $pdf->Cell(20, 5, "$".$E->precioF, 1, 0,"C");
        $pdf->Cell(20, 5,"$".$sub, 1, 1,"R"); 
    }
        $pdf->Ln(1);
        $pdf->setX(15);
        $pdf->Cell(10, 5,'', 0, 0, "C");
        $pdf->Cell(20, 5,"", 0, 0);
        $pdf->Cell(30, 5, "Forma de Pago:", 0, 0, "C");
        $pdf->Cell(60, 5, $E->tipoventa,0, 0);
        $pdf->Cell(20, 5, "", 0, 0,"C");
        $pdf->Cell(20, 5, "Total:", 0, 0,"R");
        $pdf->Cell(20, 5,"$".$t, 0, 1,"R"); 


  $pdf->Output();
}