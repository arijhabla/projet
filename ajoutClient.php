<?PHP
include "entities/client.php";
include "core/clientC.php";

if (isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Email'])and isset($_POST['Motdepasse']) and isset($_POST['Adresse']) and isset($_POST['Telephone'])){

	
$Client1=new Client(($_POST['Nom']),($_POST['Prenom']),($_POST['Email']),($_POST['Motdepasse']), ($_POST['Adresse']), ($_POST['Telephone']));
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
//var_dump($Client1);

$ClientC=new ClientC();
$ClientC->ajouterClientC($Client1);
header('Location: ../login/login.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>