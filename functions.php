<?php
function connect() {
	$host = "localhost";
	$user = "root";
	$dbName = "babystore";
	$password = "";
	$dsn = "mysql:host=$host;dbname=$dbName;port=3306;charset=utf8";
	$connetion = new PDO($dsn, $user, $password);
	$connetion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	return $connetion;
}

function getCategories(PDO $connection) {
	$sql = "SELECT * FROM category";
	$stmt = $connection->prepare($sql);
	$stmt->execute();
	$categories = $stmt->fetchAll();
	return $categories;
}


function getLastIdByCategories(PDO $connection) {
	$sql = "SELECT LAST_INSERT_ID(category_id) FROM category";
	$stmt = $connection->prepare($sql);
	$stmt->execute();
	$maxId = $stmt->fetchAll;
	print_r($maxId);
	return $maxId;
}

function getCategoryById(PDO $connection, $categoryId = 1) {
	$sql = "SELECT * FROM category WHERE (category_id=?)";
	$stmt = $connection->prepare($sql);
	$stmt->execute([$categoryId]);
	return $stmt->fetch();
}

function getProductsByCategory(PDO $connection, $categoryId = 1) {
	$sql = "SELECT * FROM product WHERE (category_id=?)";
	$stmt = $connection->prepare($sql);
	$stmt->execute([$categoryId]);
	$products = $stmt->fetchAll();
	return $products;
}


function getProductById(PDO $connection, $productId=1) {
	$sql = "SELECT * FROM product WHERE (product_id=?)";
	$stmt = $connection->prepare($sql);
	$stmt->execute([$productId]);
	return $stmt->fetch();
}
