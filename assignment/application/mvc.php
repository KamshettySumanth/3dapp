<?php
require_once 'views/load.php';
require 'models/model.php';
require 'controllers/controller.php';
$pageURI =$_SERVER['REQUEST_URI'];
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
	if (!$pageURI)
		new Controller('home');
	else
		new Controller($pageURI);
?>