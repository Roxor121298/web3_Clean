<?php
	require_once("action/CommonAction.php");

	class ProfileAction extends CommonAction {
		
		// parent:: est comme en Java : super.
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			
			return [];
		}
	}	
