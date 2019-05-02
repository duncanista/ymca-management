<?php
$path = dirname(dirname(__FILE__));

require_once $path.'/classes/fpdf/fpdf.php';
require_once "Database.php";
require_once "Student.php";
class PDF extends FPDF
{
// Page header
function Header()
{
  $path = dirname(dirname(__FILE__));

    // Logo
    $this->SetFont('Times','B',13);
    $this->Image($path.'/img/logo.jpg',20,5,10);
    // Move to the right
    $this->Cell(70);
    // Title
    $this->Write(1,'Reportes de Alumnos');
    $this->Cell(45);
    $this->SetFont('Arial','',8);
    $this->Write(1,'Fecha: ');
    $this->Write(1, date("Y-m-d"));

    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Times','I',8);
    // Page number
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$students = new Student();
$result = selectAll("student");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Times','',10);
$fields = array("idStudent", "name", "lastname", "birthdate", "curp", "birthplace");
$campos = array("ID", "Nombre", "Apellido", "Fecha de Nacimiento", "CURP", "Lugar de Nacimiento");

$x = 10;
$y = 30;
$pdf->Write(1, 'Archivo PDF generado automaticamente.');

$pdf->SetFont('Times','B',10);
$y+=10;
while($row = $result->fetch_assoc()){
  $pdf->SetXY($x,$y);
  for ($i = 0; $i < count($fields); $i++){
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(37,6,$campos[$i],1);
    $pdf->SetFont('Times','',10);
    $pdf->Cell(50,6,$row[$fields[$i]],1);
    $pdf->Ln();
  }
  $y += 40;

  $pdf->Ln();
}



$pdf->Output();
