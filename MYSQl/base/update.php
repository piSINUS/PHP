<?php
	require "db.php";
	$id = $_POST["id"];
	$name =$_POST["name"];
	$description = $_POST["description"];
	$category_id = $_POST["category_id"];
	$price = $_POST["price"];
	$update = mysqli_query($db,"UPDATE `products` SET `name` = '$name', `description` = '$description', `category_id` = '$category_id', `price` = '$price' WHERE `products`.`id` = '$id'");
	if(!$update){
		die("Nea");
	}
	die("Zaebis")
?>