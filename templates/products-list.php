		<main>
			<hr/><hr/>
			<?php foreach($products as $product): ?>
			<article class="product">
				<div class="product-title"><?= $product['title']; ?></div>
				<div class="product-img">
					<img src="images/<?= $product['thumbnail']; ?>" alt="<?= $product['title']; ?>" />
				</div>
				<p class="product-short-desc">
					<?= $product['short_desc']; ?>
				</p>
				<div class="product-price">
					<?= number_format($product['price'], 2); ?> &euro;
					<?= number_format($product['promo_price'], 2); ?> &euro;
				</div>
				<div class="product-more">
					<a href="">Voir le produit</a>
					<button>Ajouter au panier</button>
				</div>
			</article>
			<hr/>
			<?php endforeach; ?>
		</main>
