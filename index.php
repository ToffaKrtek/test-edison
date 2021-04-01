<?php
define('ROOT', dirname(__FILE__));
include_once(ROOT. '/controllers/ExtrasenseController.php');

session_start();

$controllerObject = new ExtrasenseController;

$controllerObject->actionIndex();
