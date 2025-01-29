<?php
	$showSuccesBox = false;
	// Version trad
	// faire un if sinon le phph sera lu avant et la variable ser a toujours vide
	if(!empty($_GET["info"])){
		$infosDeLusager = $_GET["info"];
	}

	// Version nouvelle
	$info = $_GET["info"] ?? "";


	if(strlen($info) >= 5){
		$showSuccesBox = true;
	}





?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="04 - formulaire.php" method="get">
			<?php
				if($showSuccesBox){
					?>
					<div style="color:green;padding:20px;background-color:yellow;">SUCCESS
					</div>
					<?php
				}
			?>
			<div>
				Info : <input type="text" name="info" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>







