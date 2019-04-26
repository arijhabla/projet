<?php
/**
 * Created by PhpStorm.
 * User: ignitedev
 * Date: 4/26/19
 * Time: 10:45 AM
 */
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->

    <title>Jelizi Technologies Services</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="../css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="../css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="../css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +216-79459000</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> jelizi.technologie.services@gnet.tn</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> Avenue Farhat Hached Rades</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> TND</a></li>
                <li><a href="login/login.html"><i class="fa fa-user-o"></i> Espace Client</a></li>
                <li><a href="fidelite.html"><i class="fa fa-user-o"></i> Fidelité</a></li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="./img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option value="0">Categories</option>
                                <option value="1">Produits</option>
                                <option value="1">Services</option>
                            </select>
                            <input class="input" placeholder="Rechercher">
                            <button class="search-btn">Rechercher</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="PanierFavoris.php">
                                <i class="fa fa-heart-o"></i>
                                <span>Favoris</span>

                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Panier</span>

                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <?php $item_total=0; $total=0; foreach($_SESSION["cart_item"] as $item)
                                    {  if (!in_array($_SESSION["cart_item"],array()))
                                    { if(isset($item['id']))
                                    {
                                    ?>
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="../img/<?php echo $item['image']?>" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#"><?php echo($item['nom']);?></a></h3>
                                            <h4 class="product-price"><span class="qty"><?php echo($item['quantite']);?></span><?php echo($item['prix']);?> TND</h4>
                                        </div>
                                        <a href="DeletePanier.php?id=<?php echo $item['id']?>" ><button class="delete"><i class="fa fa-close"></i></button></a>
                                    </div>


                                    <?php   $item_total++ ;
                                        $total+=($item['quantite']*$item['prix']);

                                    }
                                    }
                                    } ?>


                                </div>
                                <div class="cart-summary">
                                    <small><?php echo $item_total ; ?> Item(s) selected</small>
                                    <h5>SUBTOTAL: <?php echo $total ?> TND</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="checkout.php">Commander  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="index.html">Acceuil</a></li>

                <li><a href="Accessoires informatiques.html">Accessoires informatiques</a></li>
                <li><a href="securite.html">Sécurité</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="reclamation.html">Reclamation</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->

