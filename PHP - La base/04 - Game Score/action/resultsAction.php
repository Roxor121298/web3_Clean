<?php

    function execute(){

        $data = file_get_contents("data/data.txt");
        $lines = explode("\n", $data);

        return compact("lines");
    }


       

?>