<?PHP
include "config.php";
class HistoriqueC {
function afficherHistoriquecc ($Historique){
		echo "Reference: ".$Historique->getReference()."<br>";
		echo "NomArticle: ".$Historique->getNomArticle()."<br>";
		echo "Marque: ".$Historique->getMarque()."<br>";
		echo "Prix: ".$Historique->getPrix()."<br>";
	}
	
	function ajouterHistorique($Historique){
		$sql="insert into historique (NomArticle,Marque,Prix) values (:nomarticle,:marque,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $NomArticle=$Historique->getNomArticle();
        $Marque=$Historique->getMarque();
        $Prix=$Historique->getPrix();

		$req->bindValue(':nomarticle',$NomArticle);
		$req->bindValue(':marque',$Marque);
		$req->bindValue(':prix',$Prix);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherHistorique(){

		$sql="SElECT * From Historique";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerHistorique($reference){
		$sql="DELETE FROM Historique where reference=:reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierHistorique($Historique,$reference){
		$sql="UPDATE Historique SET Reference=:Reference,NomArticle=:NomArticle,Marque=:Marque,Prix=:Prix WHERE Reference=:Reference";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $Reference=$Historique->getReference();
        $NomArticle=$Historique->getNomArticle();
		$Marque=$Historique->getMarque();
        $Prix=$Historique->getPrix();


		$req->bindValue(':Reference',$Reference);
		$req->bindValue(':NomArticle',$NomArticle);
		$req->bindValue(':Marque',$Marque);
		$req->bindValue(':Prix',$Prix);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererHistorique($reference){
		$sql="SELECT * from Historique where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

	
}

?>