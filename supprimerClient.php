<?PHP
include "../core/clientC.php";
$ClientC=new ClientC();
if (isset($_POST["Telephone"])){
	$ClientC->supprimerClientC($_POST["Telephone"]);
	header('Location: afficherClient.php');
}

?>