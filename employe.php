<?PHP
class Client{
	private $Nom;
	private $Prenom;
	private $Email;
	private $Motdepasse;
	private $Adresse;
	private $Telephone;
	function __construct($Nom,$Prenom,$Email,$Motdepasse,$Adresse,$Telephone){
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->Email=$Email;
		$this->Motdepasse=$Motdepasse;
		$this->Adresse=$Adresse;
		$this->Telephone=$Telephone;

	}
	
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getEmail(){
		return $this->Email;
	}
	function getMotdepasse(){
		return $this->Motdepasse;
	}
	function getAdresse(){
		return $this->Adresse;
	}
	function getTelephone(){
		return $this->Telephone;
	}

	function setNom($Nom){
		$this->Nom=$Nom;
	}
	function setPrenom($Prenom){
		$this->Prenom=$Prenom;
	}
	function setEmail($Email){
		$this->Email=$Email;
	}
	function setMotdepasse($Motdepasse){
		$this->Motdepasse=$Motdepasse;
	}
	function setAdresse($Adresse){
		$this->Adresse=$Adresse;
	}
	function setTelephone($Telephone){
		$this->Telephone=$Telephone;
	}
	
	
}

?>