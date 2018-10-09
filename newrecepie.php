<?php
	$string = "";
	$link = mysqli_connect("shareddb-i.hosting.stackcp.net", "rezeptGenerator-33375d46", "h8uue7rkm1", "rezeptGenerator-33375d46");
	if (isset($_POST['submit'])) {
			$query = "INSERT INTO `recepiecs` (`Rezeptname`, `Zutatenliste`, `Rezept`, `Kategorie`) VALUES ('".mysqli_real_escape_string($link, $_POST['recepiename'])."', '".mysqli_real_escape_string($link, $_POST['ingredients'])."', '".mysqli_real_escape_string($link, $_POST['recepie'])."', '".mysqli_real_escape_string($link, $_POST['category'])."')";
			$result = mysqli_query($link, $query);
			$string = "Dein Rezept wurde er Datenbank hinzugefügt";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Neues Rezept erstellen</title>
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
			<div class="container post">
				<form method="post">
					<textarea name="recepiename" required placeholder="Rezeptname" class="recepiename"></textarea>
					<textarea name="ingredients" required placeholder="Zutaten"></textarea>
					<textarea name="recepie" required placeholder="Rezept"></textarea>
					<select name="category">
						<option value="Eintopf">Suppen & Eintöpfe</option>
						<option value="Vegetarisch">Vegetarisch</option>
						<option value="Fleisch">Fleisch</option>
						<option value="Fisch">Fisch</option>
						<option value="Kuchen">Kuchen</option>
						<option value="Dessert">Dessert</option>
					</select>
					<input type="submit" value="Speichern" name="submit"></input>
				</form>
				<?php
					echo '<div class="message">'.$string.'</div>';
				?>
			</div>
		</div>
	</body>
</html>