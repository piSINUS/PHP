<?php
	require "base/db.php";
	$id =$_GET["id"];
	$product = mysqli_query($db,"SELECT * FROM `products` WHERE `id` = '$id'");
	$product = mysqli_fetch_assoc($product);
?>
<form action="base/update.php" method="post" >
	<input type="hidden" name = "id" value="<?=$product["id"]?>">
	<p>Name</p>
	<input type="text" name="name" value="<?=$product["name"]?>">
	<p>Description<p>
	<textarea name="description" ><?=$product["description"]?></textarea><br></br>
	<p>category_id</p>
	<textarea name="category_id" ><?=$product["category_id"]?></textarea><br></br>
	<p>price</p>
	<textarea name="price" ><?=$product["price"]?></textarea><br></br>
	<button type="submit" >Сохранить изменения</button>
</form>