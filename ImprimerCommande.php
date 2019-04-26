<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 21/04/2018
 * Time: 23:51
 */

require_once ('../pdf/mc_table.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Details sur la commande: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'projet');

$query  = "SELECT * FROM LigneCommande INNER JOIN catalogue ON LigneCommande.idProduit=catalogue.id_article WHERE idCommande='" . $_GET['id']. "'";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $Quantite = $row['Quantite'];
        $nom = $row['nom'];
        $type = $row['type'];
        $prix = $row['prix'];
        $prixTot = $prix*$Quantite;



        $pdf->Cell(50,10,"Nom Produit :",1,0);
        $pdf->Cell(95,10,"{$nom} ",1,1);
        $pdf->Cell(50,10,"Quantite: ",1,0);
        $pdf->Cell(95,10,"{$Quantite} ",1,1);
        $pdf->Cell(50,10,"Type: ",1,0);
        $pdf->Cell(95,10,"{$type} ",1,1);
        $pdf->Cell(50,10,"Prix Unitaire: ",1,0);
        $pdf->Cell(95,10,"{$prix} ",1,1);
        $pdf->Cell(50,10,"Prix Total: ",1,0);
        $pdf->Cell(95,10,"{$prixTot} ",1,1);
    } }


$pdf->SetFont("Courier","B",9);
$pdf->MultiCell(0,10," Signature du Responsable");

$pdf->output("original.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=Arij".$_GET['id'].".pdf");
readfile("original.pdf");
unlink("original.pdf");
