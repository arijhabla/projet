<?PHP
include "../core/employeC.php";
$ClientC=new ClientC();
$listeEmployes=$ClientC->afficherClient();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Prenom</td>
<td>Email</td>
<td>Motdepasse</td>
<td>Adresse</td>
<td>Telephone</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Prenom']; ?></td>
	<td><?PHP echo $row['Email']; ?></td>
	<td><?PHP echo $row['Motdepasse']; ?></td>
	<td><?PHP echo $row['Adresse']; ?></td>
	<td><?PHP echo $row['Telephone']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Telephone']; ?>" name="Telephone">
	</form>
	</td>
	<td><a href="modifierEmploye.php?id=<?PHP echo $row['Telephone']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


