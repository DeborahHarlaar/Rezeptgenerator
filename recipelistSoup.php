<?php

	$link = mysqli_connect("shareddb-i.hosting.stackcp.net", "rezeptGenerator-33375d46", "h8uue7rkm1", "rezeptGenerator-33375d46");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Suppen & Eintöpfe</title>
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
			<div class="list" id="listResponsive">
				<ul>
					<form method="post">
						<?php
							$query = "SELECT * FROM recepiecs WHERE Kategorie = 'Eintopf'";
			
							$result = mysqli_query($link, $query);
							while ($row = mysqli_fetch_array($result)) {
								echo '<a href="detailedrecipe.php?'.$row["id"].'">'.$row["Rezeptname"].'</a>';
								//echo '<a href="javascript:void(0);" onclick="loadContent()">'.$row["Rezeptname"].'</a>';
							}
						?>
					</form>
				</ul>
			</div>
			<a href="javascript:void(0);" onclick="listResponsive()"><i class="fas fa-bars" id="barsListResponsive" aria-hidden="true"></i></a>

		</div>
	</body>
</html>