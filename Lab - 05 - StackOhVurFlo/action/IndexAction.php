<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/AnswerDAO.php");

    class indexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            $answer = AnswerDAO::getAnswer();

            if(isset($_POST["nom"]) && isset($_POST["mot"])){
                AnswerDAO::addAnswer($_POST["nom"], $_POST["mot"]);
            }
            
            return [];
        }
    }