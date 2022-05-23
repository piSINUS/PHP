<h1>
	<?php
	const LOGIN ='admin';
	const PASS ='secret123';
	$tmp_login = "admin";
	$tmp_password="secret123";
	if (LOGIN == $tmp_login && PASS == $tmp_password){
		echo "Sucsess";
	}elseif(LOGIN != $tmp_login){
		echo "USer not fond";
	}else{
		echo 'Check ur pass';
	}
	$isSTATUS = false;
	$statusRESULT = ($isSTATUS == true) ? "43246656":"98645626";
	echo $statusRESULT;
	$car = "BMW";
	switch($car){
		case "BMW":
			echo "good car";
			break;
		case "Toyota":
			echo "good cheap car";
			break;
		case "LADA":
			echo "Don't by it";
			break;
		default:
			echo "car isn't found";
	}
	?>
</h1>