<?php
	include("functions.php");
	$connection = connect();
	$categoryId = isset($_GET['category_id']) ? $_GET['category_id'] : 1;
	$categories = getCategories($connection);
	$category = getCategoryById($connection, $categoryId);
	$products = getProductsByCategory($connection, $categoryId);
	
	$json = json_encode ( $category, JSON_FORCE_OBJECT );

	$breadcrumb = [ 
		["text" => "Головна", "link" => "index.php"],
		["text" => $category['name'], "link" => ""],
	];
?>

<script>
	priceList = jQuery.parseJSON ( ' + <?= $json; ?> + ' );
</script> 

<?php include("header.php"); ?>

<main>
	<div class="pb-5r">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3">
					<?php foreach($categories as $categoryItem) : ?>
						
						<a class="list-group-item 
							<?php if($categoryItem['category_id'] == $categoryId): ?>
								list-group-item-primary
							<?php endif; ?>
							" href="category.php?category_id=<?= $categoryItem['category_id']; ?>">
                           	<?= $categoryItem['name']; ?>       
                        </a>

          			<?php endforeach; ?>	
				</div>
				<div class="col-12 col-md-6 col-lg-9">
					<h1><?= $category['name']; ?></h1>
					<p><?= $category['description']; ?></p>
					<div class="row">
						<?php foreach($products as $productItem) : ?>
							<div class="col-6 col-md-6">
								<div class="card p-1">
									<img class="card-img-top" src="./images/<?= $productItem['image']; ?>" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">
											<a href="product.php?category_id=<?= $categoryId; ?>&product_id=<?= $productItem['product_id']; ?>">
                       							<?= $productItem['name']; ?>
                       						</a>					
										</h5>
										<p class="card-text"><?= $productItem['description']; ?></p>
										<!-- <a href="#" class="btn btn-primary">Додати до кошика</a> -->
										<button class="btn btn-primery" id="wicartbutton_<?= $product['id_product']; ?>" 
											onclick="cart.addToCart(this, '<?= $product['id_product']; ?>', priceList['<?= $product['id_product']; ?>'])">Додати до кошика</button>
									</div>

									
								</div>
							</div>
						<?php endforeach; ?>	
					</div>

				</div>
		</div>
	</div>
</main>

<?php include("footer.php"); ?>