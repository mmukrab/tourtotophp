<?php

require('..recources/library/controller.class.php');

session_start();    

$controller = new controller();
$controller -> handleRequest();