


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>
		<?php
			for ($i =0; $i < 100; $i++){
				?>
				<div>
					<input type="radio" value='<?= $i ?>' name='exclusif'> <?= $i ?>
				</div>
				<?php
			}


			$i = 50;

			while ($i > 0 ){
				$i--;
				echo $i;
			}

			// array() peut etre ecrit comme une fonction
			$tab = array();
			// tableau vide
			$tab = [];

			// si on met le crochet vide comme ca ca fait un push (dernier element)
			$tab[] = "John";
			$tab[] = "Smith";


			// echo $tab;

			// si on veut voir dns un teableau utiliser var_dump qui permet d,avoir une formattage automatique
			// C'est un outil pour le programmeur
			// var_dump($tab);

			foreach($tab as $element){
				?> 
				<div>
					<?= $element ?>
				</div>
			<?php
			}



		?>
	</body>
</html>







