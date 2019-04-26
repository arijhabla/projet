<?php
require_once 'header.php';
?>

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
                <form action="AjouterCommande.php" method="post">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
                            <form >
							<div class="section-title">
								<h3 class="title">Adresse de facturation</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Nom">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Prenom">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Addresse">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Téléphone">
							</div>
							
						</div>
						<!-- /Billing Details -->

						</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Votre commande</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUITS</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>

							<div class="order-products">
                            <?php $item_total=0; $total=0; foreach($_SESSION["cart_item"] as $item)
                            {  if (!in_array($_SESSION["cart_item"],array()))
                            { if(isset($item['id']))
                            {
                                ?>
                                <div class="order-col">
									<div><?php echo($item['quantite']);?>x <?php echo($item['nom']);?></div>
									<div><?php echo($item['prix']);?> TND</div>
								</div>

                          <?php $item_total++ ;
                                $total+=($item['quantite']*$item['prix']); }}} ?>
							</div>

							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?php echo $total; ?> TND</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3" checked>
								<label for="payment-3">
									<span></span>
									Payer à la livraison
								</label>
								<div class="caption">
									<p>Vous pouvez payer à la livraison</p>
								</div>
							</div>
						</div>
				
						<button type="submit" class="primary-btn order-submit">Passer la commande</button>
					</div>

					<!-- /Order Details -->
				</div>
                </form>
				<!-- /row -->
			</div>

			<!-- /container -->
		</div>
    </form>
<?php
require_once 'footer.php';
?>