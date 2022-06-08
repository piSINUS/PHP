<h1>
	<?php
	$todos = [
	[
		"id" => 1,
		"title" => "Купить столовые приборы",
		"date" => "03.04.2020",
		"status" => "Выполнено"
	],
	[
		""id" => 2,
        "title" => "Выбросить мусор",
        "date" => "05.04.2020",
        "status" => "Ожидается"
	],
	[
		"id" => 3,
        "title" => "Помыть машину",
        "date" => "10.04.2020",
        "status" => "Ожидается"
	]
	];
	foreach($todos as $todo){
		echo "id - ".$todo["id"] . "\n";
		echo "title - ".$todo["title"] . "\n\n\n";
		echo "date - ".$todo["date"] . "\n\n\n";
		echo "status - ".$todo["status"] . "\n\n\n";
	};
	?>