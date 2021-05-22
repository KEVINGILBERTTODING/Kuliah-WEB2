<?php
// All interaction goes through the index and is forwarded 
// directly to the controller 
include_once("controller/Controller.php");
$controller = new Controller();
$controller->invoke();
