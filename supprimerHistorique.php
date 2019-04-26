<?PHP
include "../core/historiqueC.php";
$HistoriqueC=new HistoriqueC();
if (isset($_POST["reference"])){
	$HistoriqueC->supprimerHistorique($_POST["reference"]);
	header('Location: afficherHistorique.php');
}

?>