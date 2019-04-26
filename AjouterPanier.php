<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 11/04/2018
 * Time: 15:45
 */
include "../core/commandeC.php";
if (!isset($_SESSION["cart_item"])) {
    $_SESSION["cart_item"][] = array_fill_keys (array('id','nom','image','type', 'prix', 'quantite'),'');

}

$commandeC=new commandeC();
$commandeC->addpanier($_GET["id"]);

//echo print_r($_SESSION["cart_item"]);
header('Location: index.php');