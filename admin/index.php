<?php 
	include("../functions.php");
	session_start();

	if (!isset($_SESSION['user'])) {
		header("location:login.php");
		die;
	}

	$connection = connect();
	$breadcrumb = [
		["text" => "Основний сайт", "link" => "..\index.php"],
	];
?>

<?php include("header.php"); ?>


<main class="mt-5">
	<div class="conteiner">
		<div class="row justify-content-center">
			<div class="col-8 col-md-4" >  
				<div class="card p-3">
					<div class="text-xs-center">
						<img class="card-image-top img-fluid" src="images/main_categories.png" alt="Card image category">
					</div>
					<div class="card-body">
						<h5 class="card-title">Категорії</h5> 
						<p class="card-text">
							<div class="list-group">
								<a href="category_list.php" class="list-groupe-item">Список категорій</a>
								<a href="#" class="list-groupe-item">Створити нову категорію</a>
							</div>
						</p>
					</div>

				</div>
			</div>
			<div class="col-8 col-md-4" >
				<div class="card p-3">
					<div class="text-xs-center">
						<img class="card-image-top img-fluid" src="images/main_products.jpg" alt="Card image products">
					</div>
					<div class="card-body">
						<h5 class="card-title">Товари</h5> 
						<p class="card-text">
							<div class="list-group">
								<a href="category_list.php" class="list-groupe-item">Список товарів</a>
								<a href="#" class="list-groupe-item">Додати новий товар</a>
							</div>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
<?php include("footer.php"); ?>