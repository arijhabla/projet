<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 12/04/2018
 * Time: 22:09
 */
include "../core/commandeC.php";

$panierfavoris=new commandeC();
$res=$panierfavoris->getProductFrompanier($_GET["id"]);

if(empty($res))
{   $panierfavoris->InsertProductTopanier($_GET["id"]);
    header('Location: Panierfavoris.php');
}else
    header('Location: Panierfavoris.php');


