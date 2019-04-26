<?php
/**
 * Created by PhpStorm.
 * User: ignitedev
 * Date: 4/26/19
 * Time: 1:42 PM
 */
include "../core/commandeC.php";

$commande=new commandeC();
$commande->deletesinglecommande($_GET["id"]);
header('Location: Affichercommande.php');