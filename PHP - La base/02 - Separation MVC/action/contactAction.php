<?php
    

    function execute(){

        $success = false;
        $failure = false;

        if(!empty($_POST["champNom"]) && !empty($_POST["champMessage"])){
            $success = true;
        }
        else{
            $failure = true;
        }

        return compact("success", "failure");

    }
