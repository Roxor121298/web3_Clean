<?php

	// utiliser require
	// case sensitive
	// les warnings sont désactivé
	// include("lib/Utils.php");

	// case sensitive (en linux donc faire toujours)
	// crash si ca ne load pas (mieux)
	require("lib/Utils.php");

	// require_once encore plus séuritaire (permet d'éviter les double import)

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Fichiers externes</title>
		<meta charset="utf-8" />
	</head>
	<body>
		Résultat : <?= resultatFormuleScientifique(1,2) ?>
	</body>
</html>







