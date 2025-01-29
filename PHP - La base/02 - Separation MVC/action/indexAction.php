<?php
    

    function execute(){
        $errorMessage = null;
        $email = null;

        if(!empty($_POST["champCourriel"])){
            if($_POST["champCourriel"] == "test" && $_POST["champMotDePasse"] == "test"){
                header("location:prive.php");
                exit;
                $errorMessage = "SUCCESS";
            }
            else {
                $errorMessage  ="Connexion erronée!!!";
            }
        }

        return compact("errorMessage", "email");

    }
