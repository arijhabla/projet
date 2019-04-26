<?php
session_start();
include "core/clientC.php";

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$mdp=$_POST['mdp'];

	if(!$_POST['email'] | !$_POST['mdp']){
		echo "verifier les champs ";
	}else 
	{

		$compteC= new ClientC();
		$result=$compteC->recupererClient2($email,$mdp);
		foreach ($result as $raw ) {
			$type=$raw['type'];
		}
		if($type=="user")
		{
			$_SESSION["email"]=$email;
			header("location: dashbord.php");
		}else if ($type=="admin"){
		$_SESSION["email"]=$email;
			
			header("location: ../back/clients.php");
		}else {
			echo "pas de resultat";		
		}
		}
	}

?>