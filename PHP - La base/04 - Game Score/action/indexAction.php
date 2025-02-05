<?php

    function execute(){
        $gameState = false;

        if(!empty($_POST["pointage"])){
            $newScore["date"] = date("Y-m-d H:i:s", time()) . " - " . ($_POST["pointage"]/1000) . " secondes \n" ;


            file_put_contents("data/data.txt", $newScore, FILE_APPEND);
            
        }

        return compact("gameState");


    }


       

?>