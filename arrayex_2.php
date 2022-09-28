<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Ex 2</title>
</head>
<body>
<h1>World's Largest Cities</h1>
	<?php
		$cities = array(
		"Tokyo", 
		"Mexico City", 
		"New York City", 
		"Mumbai", 
		"Seoul", 
		"Shanghai", 
		"Lagos", "
		Buenos Aires", 
		"Cairo", 
		"London");


		foreach($cities as $i) {
		 		echo $i . ", ";
		 	}
		sort($cities);

		echo "\n<ul>\n" ;	
		foreach($cities as $i){
				echo "<li>$i</li>";
		}

		echo "\n<br>\n";

		array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

		sort($cities);

		foreach($cities as $i){
				echo "<li>$i</li>";
		}
		echo "</ul>";
	?>


</body>
</html>