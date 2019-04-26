<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_GET['Telephone'])){
	$ClientC=new ClientC();
    $result=$ClientC->recupererClient($_GET['Telephone']);
	foreach($result as $row){
		$Id_client=$row['Id_client'];
		$Nom=$row['Nom'];
		$Prenom=$row['Prenom'];
		$Email=$row['Email'];
		$Motdepasse=$row['Motdepasse'];
		$Adresse=$row['Adresse'];
        $Telephone=$row['Telephone'];
		


?>
<HTML>
<head>
</head>
<body>
<form method="POST">
<table>
<caption>Modifier Client</caption>
<tr>
<td>ID</td>
<td><input type="text" name="Id_client" value="<?PHP echo $Id_client ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="Nom" value="<?PHP echo $Nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="Prenom" value="<?PHP echo $Prenom ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="Email" value="<?PHP echo $Email ?>"></td>
</tr>
<tr>
<td></td>
<td>Motdepasse</td>
<td><input type="text" name="Motdepasse" value="<?PHP echo $Motdepasse ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="Adresse" value="<?PHP echo $Adresse ?>"></td>
</tr>
<tr>
<td></td>
<td>Adresse</td>
<td><input type="text" name="Telephone" value="<?PHP echo $Telephone ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="Telephone" value="<?PHP echo $_GET['Telephone'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Client=new Client($_POST['Id_client'],$_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Motdepasse'],$_POST['Adresse'],$_POST['Telephone']);
	$ClientC->modifierClient($Client,$_POST['Telephone']);
	echo $_POST['Telephone'];
	header('Location: afficherClient.php');
}
?>
</body>
</HTMl>