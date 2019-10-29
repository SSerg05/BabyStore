<?php
	include("functions.php");
	$connection = connect();
	$categories = getCategories($connection);
	$breadcrumb = [
		["text" => "Головна", "link" => ""],
	];
//	print_r($breadcrumb);
?>

<script>
	var priceList = "";
	// http://qaru.site/questions/761439/how-to-get-data-to-javascript-from-php-using-jsonencode
	// http://www.webmasters.by/articles/review-po/3477-wicart.html
	// https://webdevkin.ru/posts/frontend/korzina-dlya-internet-magazina-na-fronte-ili-pishem-modulnyij-javascript
	// https://webdevkin.ru/posts/frontend/stroim-derevo-kategorij-na-javascript-php-i-mysql
	// https://webdevkin.ru/posts/backend/internet-magazin-realizuem-oformlenie-zakaza-na-kliente-i-servere

</script> 

<script>
	var cart;
	var config;
	var wiNumInputPrefID;

	$(document).ready(function(){  
 	    cart = new WICard("cart");
    	cart.init("basketwidjet", config);
	});    

	document.addEventListener('visibilitychange', function(e) {
		cart.init("basketwidjet", config);
		}, false);
</script>

<!-- верхняя часть -->
<?php include("header.php"); ?>


<!-- Основная часть -->
<main>
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4">Baby Store</h1>
			<p class="lead">Веб-магазин сучасних дитячих іграшок</p>
			<hr class="my-4">
			<p>BabyStore.ua - це магазин різноманітних іграшок і товарів для дітей.
			Послугами веб-магазину користуються понад 100 000 покупців</p>
			<a class="btn btn-primary btn-lg" href="category.php" role="button">
				Каталог BabyStore
			</a>
		</div>
	</div>
</main>

<!-- нижняя часть -->
<?php include("footer.php"); ?>
