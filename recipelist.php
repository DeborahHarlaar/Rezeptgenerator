			<div class="list" id="listResponsive">
				<ul>
					<form method="post">
						<?php
							$query = "SELECT * FROM recepiecs WHERE Kategorie = '$kategorie'";
			
							$result = mysqli_query($link, $query);
							while ($row = mysqli_fetch_array($result)) {
								echo '<a href="detailedrecipe.php?'.$row["id"].'">'.$row["Rezeptname"].'</a>';
							}
						?>
					</form>
				</ul>
			</div>
			<a href="javascript:void(0);" onclick="listResponsive()"><i class="fas fa-bars" id="barsListResponsive" aria-hidden="true"></i></a>