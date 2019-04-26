<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 11/04/2018
 * Time: 16:12
 */
session_start();
foreach($_SESSION["cart_item"] as $k => $v)
{
    if($_GET['id']==$_SESSION["cart_item"][$k]['id'])
    {
        unset($_SESSION["cart_item"][$k]);

    }
}
header('Location: index.php');