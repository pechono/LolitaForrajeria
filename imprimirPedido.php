<?php
//require('fpdf184/fpdf.php');
include_once "funciones.php";
include_once "imprimirEyp.php";
//require "plantilla.php";

if (!empty($_POST)) {

    $_SESSION["o"]=$_POST["op"];

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->AddPage();//añade l apagina / en blanco
    $pdf->SetMargins(20,10,10);
    $pdf->SetAutoPageBreak(true,20);//salto de pagina automatico
    $pdf->SetX(15);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20, 5,'', 0, 0, "C");
    $pdf->Cell(20, 5,'id', 1, 0, "C");
    $pdf->Cell(100,5,'Articulo', 1, 0);
    $pdf->Cell(20,5,'Cantidad', 1, 1, "C");

    $pdf->SetFillColor(233, 229, 235);//color de fondo rgb
    $pdf->SetDrawColor(61, 61, 61);//color de linea  rgb
    $pdf->SetFont('Arial','',12);
    $op=$_POST["op"];
   
    $oper=imprimirPedido($op);
    foreach($oper as $E){
        $pdf->Ln(0.6);
    $pdf->setX(15);
    $pdf->Cell(20, 5,'', 0, 0, "C");
        $pdf->Cell(20, 5, $E->id_articulo, 1, 0, "C");
        $pdf->Cell(100, 5, $E->art, 1, 0);
        $pdf->Cell(20, 5, $E->cantidad, 1, 1, "C");
    }

    $pdf->Output();
}