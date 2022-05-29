<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Description</th>
		<th>CategoryId</th>
		<th>price</th>
	</tr>
	<?php
	require "base/db.php";
	$products = mysqli_query($db,"SELECT * FROM `products`");
	$products = mysqli_fetch_all($products);
	foreach($products as $product){
		?>
		<tr>
			<td><?=$product[0]?></td>
			<td><?=$product[1]?></td>
			<td><?=$product[2]?></td>
			<td><?=$product[3]?></td>
			<td><?=$product[4]?></td>
			<td><a href = "post.php?id=<?=$product[0]?>">Открыть пост</a></td>
			<td><a href = "post_edit.php?id=<?=$product[0]?>">Изменить пост</a></td>
			<td><a href = "base/post_delete.php?id=<?=$product[0]?>">Удалить пост</a></td>
		</tr>	
		<?php
		
		
	};
	?>



</table>