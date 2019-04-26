<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 12/04/2018
 * Time: 22:27
 */
include "../core/commandeC.php";

$panierfavoris=new commandeC();

$panierfavoris->deletefromFavoris($_GET["id"]);
header('Location: panierfavoris.php');