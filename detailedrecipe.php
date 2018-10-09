<?php

	$link = mysqli_connect("localhost", "root", "", "root");

	$uri = $_SERVER['REQUEST_URI'];
	$currentId = explode("?", $uri);
	$currentId = $currentId[1];

	$query = "SELECT * FROM recepiecs WHERE id = $currentId";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)) {
		$rezeptname = $row['Rezeptname'];
		$zutatenliste = $row['Zutatenliste'];
		$rezept = $row['Rezept'];
		$kategorie = $row['Kategorie'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
			echo $rezeptname;
			?>
		</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script type="text/javascript" src="nav.js"></script>
	</head>

	<body>
		<?php
			include "navbar.php";
		?>	
		<div class="bgimage">
			<?php
				include "recipelist.php";
			?>
			
			<div class="container">
				<div id="recepiename"><h1>
					<?php
						echo $rezeptname;
					?>
					</h1>
				</div>
				<div class="flex">
					<div id="ingredients">
						<?php
							echo nl2br($zutatenliste);
						?>
					</div>
					<div id="recepie">
						<?php
							echo nl2br($rezept);
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>