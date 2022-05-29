<?php
require "base/db.php";
$id =$_GET["id"];
$product = mysqli_query($db,"SELECT * FROM `products` WHERE `id` = '$id'");
$product = mysqli_fetch_assoc($product);
?>

<h1> <?=$product["name"]?></h1>
<h2> <?=$product["description"]?></h2>
<h3> <?=$product["category_id"]?></h3>
<h4> <?=$product["price"]?></h4>
<p>
TexttextTexttextTexttextexttextTexttextTexttextTexttextTexttextTexttext
</p>
