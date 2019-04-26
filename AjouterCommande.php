<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 11/04/2018
 * Time: 17:17
 */
include "../entities/commande.php";
include "../core/commandeC.php";


    $commandeC=new commandeC();
    $commandeC->insertnewcommande();
    //header('Location: index.php');

?>