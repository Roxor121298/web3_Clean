<?php
	require_once("action/CommonAction.php");
	// phpc = Faire un contrôleur

	class HomeAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			
			return [];
		}
	}