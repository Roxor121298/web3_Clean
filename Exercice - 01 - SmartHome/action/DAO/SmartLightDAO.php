<?php
    require_once("action/DAO/Connection.php");

    class SmartLightDAO {

        public static function getLightsStatus() {

            $connection = Connection::getConnection();
            $lights = [];

            $statement = $connection->prepare("SELECT * FROM lights");
            $statement->execute();

            $lights =$statement->fetchAll();
            // $row = $statement->fetch();

            // if($row){
            //     $lights = [
            //         "name" => $row["name"],
            //         "status" => $row["status"],
            //     ];
            // }

            return $lights;
        }

    }