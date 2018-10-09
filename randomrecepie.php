<?php

	$link = mysqli_connect("shareddb-i.hosting.stackcp.net", "rezeptGenerator-33375d46", "h8uue7rkm1", "rezeptGenerator-33375d46");
	$query = "SELECT * FROM recepiecs ORDER BY RAND() LIMIT 1";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)) {
		$rezeptname = $row['Rezeptname'];
		$zutatenliste = $row['Zutatenliste'];
		$rezept = $row['Rezept'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ein zufälliges Rezept wurde generiert</title>
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