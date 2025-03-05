<?php
    require_once("action/AjaxSha1Action.php");

    $action = new AjaxSha1Action();
    $data = $action->execute();

	echo json_encode($data["result"]);