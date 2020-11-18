<?php
//Start session
session_start();

//Config file
require_once 'config.php';

//Include Helpers
require_once 'helpers/system_helpers.php';

//Autoloader
function __autoload($class_name){
    require_once 'lib/' .$class_name. '.php';
    
}
