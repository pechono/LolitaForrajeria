<?php
require 'fpdf184/fpdf.php';
include_once "funciones.php";

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $imp=imprimirVenta($_SESSION["o"]);
        foreach($imp as $i){
            $fecha=$i->fecha;
            $cliente=$i->aCl .", ".$i->nCl;
            $usuario=$i->aUs .", ".$i->nUs;
            $op=$i->id_operacion;

        }
      
        
        $this->SetFont('Times','B',20);
        $this->Cell(0, 1, "________________________________________________________", 0, 1, "C");
        $this->setX(15);
        $this->Image("img/abuela.png",20,17,20); //imagen(archivo, png/jpg || x,y,tamaño)
        $this->setXY(60,15);
        $this->Cell(100,10,'X',1,0,'C',0);
        $this->SetFont('Times','B',10);
        $this->Cell(40,10,'Operacion:'.str_pad($op, 6, "0", STR_PAD_LEFT),0,0,'C',0);
        $this->Cell(100,10,'Forrajeria Lolita',0,1,'C',0);
        $this->SetFont('Times','B',10);
        $this->Cell(200,10,'Chamical - La Rioja',0,1,'C',0);
        $this->Ln(1);
        $this->SetFont('Times','B',20);
        $this->Cell(0, 2, "________________________________________________________", 0, 1, "C");
        $this->Ln(1);
        $this->SetFont('Arial','B',8);
        $this->Cell(60,8,"Fecha:  ". $fecha ,0,0,'R',0); 
        $this->Cell(60,8,"Cliente:  ". $cliente ,0,0,'R',0);
        $this->Cell(60,8,"Usuario:  "  . $usuario ,0,1,'R',0);
        $this->SetFont('Times','B',20); 
        $this->Cell(0, 1, "________________________________________________________", 0, 1, "C"); 
        $this->Ln(5);
    }

    // Pie de página
    function Footer()
    {
     $this->SetY(-20);
     // Arial italic 8$this->SetFont('Times','B',20); 
      $this->SetFont('Times','B',20); 
        $this->Cell(0, 1, "________________________________________________________", 0, 1, "C"); 
     $this->SetFont('Arial','B',10);
     // Número de página
     $this->Cell(170,10,'Forrajeria Lolita',0,0,'C',0);
     $this->Cell(25,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,1,'C');
     $this->Cell(170,10,'Telefono: 3826 54-0417',0,1,'C',0);
     $this->SetFont('Times','B',20); 
     $this->Cell(0, 1, "________________________________________________________", 0, 1, "C"); 
    }
}
?>