<?php
	include("functions.php");
	$connection = connect();
	$productId = isset($_GET['product_id']) ? $_GET['product_id'] : 1;
	$product = getProductById($connection, $productId);

	$categoryId = isset($_GET['category_id']) ? $_GET['category_id'] : 1;
	$categories = getCategories($connection);
	$category = getCategoryById($connection, $categoryId);

	$json = json_encode ( $category, JSON_FORCE_OBJECT );

	$breadcrumb = [ 
		["text" => "Головна", "link" => "index.php"],
		["text" => $category['name'], "link" => "category.php?category_id=$categoryId"],
		["text" => $product['name'], "link" => ""],
	];
//	print_r($categoryId);
//	print_r($productId);
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
					<div class="row">
						<div class="col-6 col-md-12">
							<div class="card p-1" >
								<div class="card-body">
									<h5 class="card-title">
            	   						<?= $product['name']; ?>
									</h5>
									<img class="card-img-left img-thumbnail" 
										 style="width: 18rem; margin: 0 20px 10px 0; padding: 0; float: left;" 
										 src="./images/<?= $product['image']; ?>" alt="Card image cap">
									<p class="card-text"><?= $product['description']; ?></p>
									<p class="card-title"><?= $product['price']; ?></p>
									<button class="btn btn-primery" id="wicartbutton_<?= $product['id_product']; ?>" 
											onclick="cart.addToCart(this, '<?= $product['id_product']; ?>', priceList['<?= $product['id_product']; ?>'])">Додати до кошика</button>
									<!-- <a href="#" class="btn btn-primery">Додати до кошика</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php include("footer.php"); ?>