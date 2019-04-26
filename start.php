<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
$Client=new Client('BEN Ahmed','Salah','dfghjk@fghj','xcvbn','sdfghj',5055);
$ClientC=new ClientC();
$ClientC->afficherClient($Client);
echo "****************";
echo "<br>";
echo "Nom:".$Client->getNom();
echo "<br>";
echo "Prenom:".$Client->getPrenom();
echo "<br>";
echo "Email:".$Client->getEmail();
echo "<br>";
echo "Motdepasse:".$Client->getMotdepasse();
echo "<br>";
echo "<br>";
echo "Adresse:".$Client->getAdresse();
echo "<br>";
echo "Telephone:".$Client->getTelephone();
echo "le salaire est : ";
$employerC->calculerSalaire($employe); 
echo "<br>";


?>