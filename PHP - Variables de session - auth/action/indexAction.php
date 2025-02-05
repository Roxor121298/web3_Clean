<?php
	session_start(); // Créer un cookie avec PHPSESSID s'il n'existe pas, sinon charge les variables de session

	function execute() {
		$email = $_SESSION["courriel"] ?? null;
		$connectionError = false;
		
		if (isset($_POST["courriel"]) && isset($_POST["motDePasse"])) {
			if ($_POST["courriel"] === "test@test.com" &&
				$_POST["motDePasse"] === "test") {
		
				$email = $_POST["courriel"];

				// Toronto, rappelle-toi du courriel aussi longtemps que la session existe!!!!!
				$_SESSION["courriel"] = $email;
				$_SESSION["role"] = "admin";
				// $cour = $_SESSION["courriel"]
			}
			else {
				$connectionError = true;
			}
		}

		$isConnected = !empty($_SESSION["courriel"]);
		
		return compact("email", "connectionError", "isConnected");
	}