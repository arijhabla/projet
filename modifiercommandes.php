<?php

include "../core/commandeC.php";

$commande=new commandeC();

$commande->modifiersinglecommande($_GET["id"]);

header('Location: Affichercommande.php');