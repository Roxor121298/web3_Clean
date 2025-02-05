<?php
    
    function execute() {
        $data = file_get_contents("data/data.txt");
        $data = json_decode($data);
        $showSuccessMessage = false;

        if (!empty($_POST["message"])) {
            $showSuccessMessage = true;

            $newInscription = [];
            $newInscription["nom"] = $_POST["name"];
            $newInscription["message"] = $_POST["message"];
            $newInscription["cours"] = $_POST["course"];

            // Si [] est avant le =, c'est un push dans le tableau
            $data->inscriptions[] = $newInscription;
            file_put_contents("data/data.txt", json_encode($data));
        }
        
        $pageCounter = $data->counter;

        return compact("pageCounter", "showSuccessMessage");
    }