<?php 
require_once("action/affichageAction.php");
$data = execute();

require_once("partial/header.php");
?>

<a href="index.php">Retour en arrière.. </a>
<?php


	if(!empty($_SESSION)){
		foreach($_SESSION["PostIt"] as $post){
			?>

            <div style="position: absolute; left: <?= $post["x"] ?>px; top: <?= $post["y"] ?>px;">
            <div style="position: absolute; left: 40%; top:45%;"><?= $post["texte"] ?></div>
            
            <img src="images/post.png">
            </div>
			<?php
		}
	}

?>

<?php 

require_once("partial/footer.php");


