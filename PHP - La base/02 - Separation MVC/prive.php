<?php
    
    require_once("action/priveAction.php");
    $data = execute();
    $listeAgent = $data["espion"];

    require_once("partial/header.php");

?>

			<h1>
				Authentification réussi 
                <?php
                    foreach($data["espion"] as $spy){
                        ?>
                        <div><?=$spy?></div>
                        <?php
                    }
                ?>
			</h1>


    <?php

        require_once("partial/footer.php");
		
