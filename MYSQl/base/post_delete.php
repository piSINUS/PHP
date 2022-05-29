<?php
	require "db.php";
	$id =$_GET["id"];
	$delete = mysqli_query($db,"DELETE FROM `products` WHERE `products`.`id`='$id'");
	if (!$delete){
		die("nezbs");
	};
	die("zbs")
	?>