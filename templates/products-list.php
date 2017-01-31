		<main>
			<hr/><hr/>
			<?php if (!isset($_GET['product'])) : ?>
			<div id="products">
				<?php foreach($products as $id => $product): ?>
				<article class="product">
					<div class="product-title"><?= $product['title']; ?></div>

					<div class="product-img">
						<img src="images/<?= $product['thumbnail']; ?>" alt="<?= $product['title']; ?>" />
					</div>

					<p class="product-short-desc">
						<?= $product['short_desc']; ?>
					</p>

					<div class="product-price">
						<?php if ($product['price'] != $product['promo_price']): ?>
							<span class="product-old-price">
								<?= number_format($product['price'], 2); ?> &euro;
							</span>
							<span class="product-new-price">
								<?= number_format($product['promo_price'], 2); ?> &euro;
							</span>
						<?php else: ?>
							<span class="product-normal-price">
								<?= number_format($product['price'], 2); ?> &euro;
							</span>
						<?php endif; ?>
					</div>

					<div class="product-more">
						<a href="?product=<?= $id; ?>">Consulter le produit</a>
						<button type="button" name="button">Ajouter au panier</button>
					</div>
				</article>
				<?php endforeach; ?>
			</div>
			<?php
			else:
				$product = (is_numeric($_GET['product'])) ? $products[$_GET['product']] : $products[0];
			?>
			<div id="product">
				<div class="back-url">
					<a href="index.php" title="Retour en arrière">Retourner à la page précédente</a>
				</div>

				<article class="product">
					<div class="product-title"><?= $product['title']; ?></div>

					<div class="product-img">
						<img src="images/<?= $product['picture']; ?>" alt="<?= $product['title']; ?>" />
					</div>

					<p class="product-long-desc">
						<?= $product['long_desc']; ?>
					</p>

					<div class="product-price">
						<?php if ($product['price'] != $product['promo_price']): ?>
							<span class="product-old-price">
								<?= number_format($product['price'], 2); ?> &euro;
							</span>
							<span class="product-new-price">
								<?= number_format($product['promo_price'], 2); ?> &euro;
							</span>
						<?php else: ?>
							<span class="product-normal-price">
								<?= number_format($product['price'], 2); ?> &euro;
							</span>
						<?php endif; ?>
					</div>

					<div class="product-more">
						<button type="button" name="button">Ajouter au panier</button>
					</div>
				</article>
			</div>
			<?php endif; ?>
		</main>
