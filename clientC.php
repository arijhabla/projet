
<?PHP
include "config.php";
class ClientC {
function afficherClientcc($Client){
	    echo "Id_client: ".$Client->getId_client()."<br>";
		echo "Nom: ".$Client->getNom()."<br>";
		echo "Prenom: ".$Client->getPrenom()."<br>";
		echo "Email: ".$Client->getEmail()."<br>";
		echo "Motdepasse: ".$Client->getMotdepasse()."<br>";
		echo "Adresse: ".$Client>getAdresse()."<br>";
		echo "Telephone: ".$Client->getTelephone()."<br>";
	}
	
	function ajouterClientC($Client){
		$type="user";
		$sql="insert into client(Nom,Prenom,Email,Motdepasse,Adresse,Telephone,type) values (:Nom,:Prenom,:Email,:Motdepasse,:Adresse,:Telephone,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id_client=$Client->getId_client();
        $Nom=$Client->getNom();
        $Prenom=$Client->getPrenom();
        $Email=$Client->getEmail();
        $Motdepasse=$Client->getMotdepasse();
        $Adresse=$Client->getAdresse();
        $Telephone=$Client->getTelephone();
		$req->bindValue('Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Motdepasse',$Motdepasse);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Telephone',$Telephone);
		$req->bindValue(':type',$type);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage(); 
            echo 'ahgahga'      ;  }
		
	}
	
	function afficherClient(){
		//$sql="SElECT * From ReclamationRendezvous e inner join formationphp.ReclamationRendezvous a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClientC($Telephone){
		$sql="DELETE FROM client where Telephone=:Telephone";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Telephone',$Telephone);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierClient($Client,$Telephone){
		$sql="UPDATE client SET Id_client=:Id_client, Nom=:Nom,Prenom=:Prenom,Email=:Email,Motdepasse=:Motdepasse,Adresse=:Adresse,Telephone=:Telephone WHERE Telephone=:Telephone";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $Id_client=$Client->getId_client();
        $Nom=$Client->getNom();
        $Prenom=$Client->getPrenom();
		$Email=$Client->getEmail();
        $Motdepasse=$Client->getMotdepasse();
        $Adresse=$Client->getAdresse();
        $Telephone=$Client->getTelephone();
		$datas = array(':Id_client'=>$Id_client,':Nom'=>$Nom,':Prenom'=>$Prenom,':Email'=>$Email, ':Motdepasse'=>$Motdepasse, ':Adresse'=>$Adresse,':Telephone'=>$Telephone);
		$req->bindValue(':Id_client',$Id_client);	
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Motdepasse',$Motdepasse);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Telephone',$Telephone);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererClient($Telephone){
		$sql="SELECT * from client where Telephone=$Telephone";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererClient2($email,$password){
		$sql="SELECT * from client where Email='".$email."' and Motdepasse='".$password."'";
				$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercheClient($recherche){
		
		$sql="SELECT * FROM client WHERE Telephone LIKE '%".$recherche."%' ORDER BY Nom ASC";
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