<?php
$nametovara=$_POST["nametovara"];
$opisanie =$_POST["opisanie"];
$Kat =$_POST["Kat"];
$price=$_POST["price"];

$names = "Название товара: $nametovara\n Описание товара $opisanie\n Категория товара $Kat\n Цена $price";
$filprod = "products.txt";

$fp = fopen($filprod,"w");
fwrite($fp,$names);
fclose($fp);
?>