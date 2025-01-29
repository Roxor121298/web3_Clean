<?php
	function hasher($mot, $sel = "abc"){

		// sha1 n'est plus utilisé car il est suceptible auttaque brute force et rainbow table
		$mot = sha1($mot . $sel);

		// password_hash utilise BCryot qui donne un hash different a chaque fois et est plus lent
		$mot = password_hash($mot, PASSWORD_DEFAULT);


		password_verify("test" ,  $mot);

		return $mot;

	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les fonctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Création d'un hash</h1>
		<div><?= hasher("test", "1")?></div>
		<div><?= hasher("test", "2")?></div>
	</body>
</html>







