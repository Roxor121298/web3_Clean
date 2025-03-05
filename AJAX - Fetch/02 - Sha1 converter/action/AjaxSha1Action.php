<?php
    require_once("action/CommonAction.php");

    class AjaxSha1Action extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = sha1($_POST["mot"]); 
            
            // $ici = file_get_contents("https://perdu.com");
            
            return compact("result");
        }
    }