<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/Connection.php");

    class AnswerAction extends CommonAction {

        public static function getAnswer() {

            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT * FROM stack_answers");
            $statement->execute();

            $ui = $statement->fetchAll();
            
            return $ui;
        }


        public static function addAnswer($author, $answer) {

            $connection = Connection::getConnection();

            $statement = $connection->prepare("INSERT [$author, $answer] INTO stack_answers");
            $statement->execute();
            
            return [];
        }


    }