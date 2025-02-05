<?php
    session_start();

    function execute() {


        // videz cache
        // $_SESSION["PostIt"] = [];

        if(empty($_SESSION["PostIt"])){
            $_SESSION["PostIt"] = [];
        }

        if(!empty($_GET["texte"]) && !empty($_GET["x"]) && !empty($_GET["y"])){
            $_SESSION["PostIt"][] =    ["texte" => $_GET["texte"],
                                        "x" => $_GET["x"],          
                                        "y" => $_GET["y"] ];
        }


        // return compact("$_SESSION[PostIt]");

    }


?>