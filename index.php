<?php

	$link = mysqli_connect("localhost", "root", "", "root");

?>



<!DOCTYPE html>
	<html>
	<head>
		<title>Rezept-Generator</title>
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
			<div class="container">
				<p>Eine Party steht an und das richtige Essen fehlt noch für eine größere Anzahl von Leuten? Dann lass dich hier inspirieren. Entweder schau direkt in einer einzelnen Kategorie, oder genriere ein <a href="randomrecepie.php">zufälliges Rezept</a>. Es fehlt noch ein Rezept? Dann füge ein <a href="newrecepie.php">neues Rezept</a> hinzu.
				</p>
			</div>
		</div>
	</body>
</html>