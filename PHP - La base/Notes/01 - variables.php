<?php
	$username = "Edouard";

	// le . sert a concatenée en php au lieu du +
	// et pou référer a une fonction d'un object on utilise ->
	if($username == "Edouard"){
		$username = $username . " Smith";
	}

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Les deux facon denvoyer du php vers le html avec soit echo ou ?= -->
		<title>Variables <?php echo $username; ?> <?= $username; ?></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<!-- le ?= ca s,apelle un short tag -->
		Nom : <?= $username; ?>
	</body>
</html>







