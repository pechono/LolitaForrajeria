<?php
require 'fpdf184/fpdf.php';
include_once "funciones.php";

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $imp=imprimirPedido($_SESSION["o"]);
        foreach($imp as $i){
            $fecha=$i->fecha;
            $usuario=$i->apellido .", ".$i->nombre;
            $proveedor=$i->proveedor;
        }
        // Logo
      /*  $this->Image("img/abuela.png", 10, 5, 13);
        // Arial bold 15
        $this->SetFont("Arial", "B", 12);
        // Título
        $this->Cell(25);
        $this->Cell(140, 5, utf8_decode("Reporte de alumnos árbol ñoño"), 0, 0, "C");
        //Fecha
        $this->SetFont("Arial", "", 10);
        $this->Cell(25, 5, "Fecha: ". date("d/m/Y"), 0, 1, "C");
        // Salto de línea
        $this->Ln(10);*/
        
        $this->SetFont('Times','B',20);
        $this->Cell(0, 1, "________________________________________________________", 0, 1, "C");
        $this->Image("img/abuela.png",0,15,20); //imagen(archivo, png/jpg || x,y,tamaño)
        $this->setXY(60,15);
        $this->Cell(100,10,'Forrajeria Lolita',0,1,'C',0);
        $this->SetFont('Times','B',10);
        $this->Cell(200,10,'Chamical - La Rioja',0,1,'C',0);
        $this->Ln(1);
        $this->SetFont('Times','B',20);
        $this->Cell(0, 2, "________________________________________________________", 0, 1, "C");
        $this->Ln(1);
        $this->SetFont('Arial','B',8);
        $this->Cell(100,8,"Fecha:  ". $fecha ,0,0,'R',0); 
        $this->Cell(40,8,"Proveedor:  ". $proveedor ,0,0,'R',0);
        $this->Cell(40,8,"Usuario:  "  . $usuario ,0,1,'R',0);
        
        $this->SetFont('Times','B',20); 
        $this->Cell(0, 1, "________________________________________________________", 0, 1, "C"); 
        $this->Ln(5);
    }

    // Pie de página
    function Footer()
    {
       /* // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    */
     // Posición: a 1,5 cm del final
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