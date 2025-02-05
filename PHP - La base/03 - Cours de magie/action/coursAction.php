<?php
    
    function execute() {
        $data = file_get_contents("data/data.txt");
        $data = json_decode($data);
        
        $pageCounter = $data->counter;

        return compact("pageCounter");
    }