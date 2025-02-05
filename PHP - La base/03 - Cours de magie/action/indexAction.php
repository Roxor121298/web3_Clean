<?php
    
    function execute() {
        $data = file_get_contents("data/data.txt");
        $data = json_decode($data);
        // var_dump est très pratique pour vérifier le contenu d'une variable
        // Parfait pour débogguer
        // var_dump($data);
        // exit;
        $data->counter = $data->counter + 1;
        file_put_contents("data/data.txt", json_encode($data));
        
        $pageCounter = $data->counter;

        return compact("pageCounter");
    }

    // $data
    // $data["pageCounter"]