<?php 

require_once("action/indexAction.php");
$data = execute();




require_once("partial/header.php");

?>

	<a href="affichage.php">affichage !! </a>
	
	<form action="" method="get">
		<div class="form-text">text : <input type="text" name="texte"></div>
		<div class="form-x">x : <input type="nb" name="x"></div>
		<div class="form-y">y : <input type="nb" name="y"></div>
		<button>Envoyer</button>
	</form>




<?php 

require_once("partial/footer.php");


