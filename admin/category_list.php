<?php
	include("../functions.php");
	$connection = connect();
	$categories = getCategories($connection);
	
	$breadcrumb = [ 
		["text" => "Головна", "link" => "index.php"],
		["text" => "Список категорій", "link" => ""],
	];
?>

<?php include("header.php"); ?>

<main>
	<div class="container">

		<form action="categoryNew.php">
		<div class="row">
			<div class="col-12">
				<h1>Список категорій</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-4 col-lg-1">
				<h5>#</h5>
			</div>

			<div class="col-12 col-md-4 col-lg-3">
				<h5>Назва</h5>
			</div>
			<div class="col-12 col-md-4 col-lg-3">
				<h5>Дія</h5>
			</div>
		</div>

			<?php foreach($categories as $categoryItem) : ?>
				<div class="row">
					<div class="col-12 col-md-4 col-lg-1">
						<p><?= $categoryItem['category_id']; ?></p>
					</div>
	
					<div class="col-12 col-md-4 col-lg-3">
						<p><?= $categoryItem['name']; ?></p>
					</div>
					<div class="col-12 col-md-4 col-lg-3">
						<!-- <a href="" >Edit</a> -->
						<!-- <a href="newCategory.php?category_id=<?= $categoryItem['category_id']; ?>" > -->
							<button 
								class="btn btn-outline-primary my-2 my-sm-0" 
								type="submit" 
								name="category_id" 
								value="<?= $categoryItem['category_id']; ?>">
								Edit
							</button>

							<!-- <input type="button" name="NOTHING" value="Skip &rsaquo;" onclick="location = 'yada-yada.asp';"> -->
						<!-- </a> -->
					</div>
				</div>
			<?php endforeach; ?>
		
		<div class="row">
			<div class="col-12" style="margin: 30px;">
   				<button 
   					class="btn btn-primary my-2 my-sm-0" 
   					type="submit" 
   					name="category_id"
   					value="new">
   					Нова категорія
   				</button>
   			</div>
   		</div>
   		</form>

	</div>
</main>

<?php include("footer.php"); ?>