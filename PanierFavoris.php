<?php
include "../core/commandeC.php";

$CommandeC=new commandeC();
$favoris=$CommandeC->GetListFavoris();
require_once 'header.php';
?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessoires<br>informatiques</h3>
								<a href="Accessoires informatiques.html" class="cta-btn">Voir <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessoires<br>sécurité</h3>
								<a href="securite.html" class="cta-btn">Voir <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Nos<br>Services</h3>
								<a href="services.html" class="cta-btn">Voir <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Favoris</h3>
						
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">

                                    <?php
                                    foreach($favoris as $product)
                                    {?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/<?php echo $product['image'] ?> " alt="">
												<div class="product-label">
													
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $product['type'] ?> </p>
												<h3 class="product-name"><a href="#"><?php echo $product['nom'] ?> </a></h3>
												<h4 class="product-price"><?php echo $product['prix'] ?> TND</h4>

												<div class="product-btns">
                                                    <a href="AjouterPanier.php?id=<?php  echo $product['id_article'] ; ?>&quantite=1" class="add-to-cart-btn" ><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
												</div>
											</div>
											<div class="add-to-cart">

												<a href="Deletefavoris.php?id=<?php  echo $product['id_article'] ; ?>" class="add-to-wishlist"><i class="fa fa-heart-o"></i>Effacer Du Favoris</a>
											</div>
										</div>
										<!-- /product -->
                                        <?php }?>

									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->


<?php
require_once 'footer.php';
?>