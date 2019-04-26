<?PHP
include "../core/historiqueC.php";
$HistoriqueC=new HistoriqueC();
$listeEmployes=$HistoriqueC->afficherHistorique();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Reference</td>
<td>NomArticle</td>
<td>Marque</td>
<td>Prix</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['reference']; ?></td>
	<td><?PHP echo $row['nomarticle']; ?></td>
	<td><?PHP echo $row['marque']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	
	</tr>
	<?PHP
}
?>
</table>


