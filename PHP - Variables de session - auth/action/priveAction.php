<?php
	session_start();

	function execute() {
		$cc = "4540 1233 5645 3453";
		$isConnected = !empty($_SESSION["courriel"]);
	
		if (empty($_SESSION["courriel"])) {
			header("location:index.php");
			exit;
		}
		
		return compact("cc", "isConnected");
	}