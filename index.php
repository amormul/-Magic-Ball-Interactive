<?php
include_once 'app/MagicBall.php';
include_once 'app/Validator.php';
include_once 'app/RequestHandler.php';

$requestHandler = new RequestHandler();
$requestHandler->handleRequest();