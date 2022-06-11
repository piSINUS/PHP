<?php
	$db=$_FILES["image"]["type"];
	if($db!=="image/png" and $db!=="image/jpeg"){
		echo "Файл не поддерживается";
		die();
	}
	$tmp =$_FILES["image"]["tmp_name"];
	$dirsave = "uploads/".time() ."".$_FILES["image"]["name"];
	move_uploaded_file($tmp,$dirsave);
	
?>