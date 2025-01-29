<<?php
    
    require_once("action/contactAction.php");
    $data = execute();

    require_once("partial/header.php");
?>


            <?php
				if(!empty($data)){
                    if($data["success"] == true){ ?>
                    <div style="color:black;background-color:green;padding:5px;">
                        Merci pour votre message !!
					</div> 
                    <?php 
                    }
                    if($data["failure"] == true) {
                        ?>
                        <div style="color:red;background-color:pink;padding:5px;">
                        Veuillez mettre votre nom et votre message
					    </div> 
                        <?php

                    }
					?>
					<?php
				}
			?>
            <form action="" method="post">
				<div class="formLabel"><label for="courriel"> Nom : </label></div>
				<div class="formInput"><input type="text" name="champNom" /></div>
				<div class="formSeparator"></div>
				
				<div class="formLabel"><label for="message"> Message : </label> </div>
				<div class="formInput"><input type="message" name="champMessage" /></div>
				<div class="formSeparator"></div>
				
				<div class="formLabel">&nbsp;</div>
				<div class="formInput"><input type="image" src="images/submit.png" /></div>
				<div class="formSeparator"></div>
			</form>

<?php

require_once("partial/footer.php");