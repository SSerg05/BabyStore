<?php
	include("../functions.php");
	$connection = connect();

	$breadcrumb = [ 
		["text" => "Головна", "link" => "index.php"],
		["text" => "Нова категорія", "link" => ""],
	];

	$categoryId = isset($_GET['category_id']) ? $_GET['category_id'] : 1;
	print_r($categoryId);
	if ($categoryId == "new"){
		print_r($categoryId);
		$categoryId = getLastIdByCategories($connection);
	}
//	$categoryId	= (int)$categoryId;
	print_r($categoryId);

?>



<?php include("header.php"); ?>

<main>
<div class="container">
	<form method="post" action="process.php" id="myForm" name="myForm" >
		<label for="ID">ID</label>:  <input type="text" name="ID" /><br />
		<label for="nm">NM:</label> <input type="text" name="nm"><br />
		<label for="company">Company:</label> <input type="text" name="company"><br />
		<label for="address">Address:</label> <input type="text" name="address"><br />
		<label for="city">City</label>: <input type="text" name="city"><br />
		<label for="zip">Zip</label>: <input type="text" name="zip"><br />
		<label for="state">State</label>: <input type="text" name="state"><br />
		<label for="phone">Phone</label>: <input type="text" name="phone"><br />
		<label for="web_site">Website</label>: <input type="text" name="web_site"><br />
		<input type="submit" name="submit" />// this is your submit button
	</form>
</div>

	
</main>

<?php include("footer.php"); ?>