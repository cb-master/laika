<?php
/**
 * Name:                Laika Framework
 * Author:              Showket Ahmed
 * Uri:                 https://cloudbillmaster.com
 * Email:               riyadtayf@gmail.com
 * Version:             1.0.0
 * Provider:            Cloud Bill Master Ltd.
 * PHP Version Required: 8.2.0
 */

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

use CBM\Core\Support\Directory;
use CBM\Core\Response\Response;

// Require Autoload
require_once(ROOTPATH."/vendor/autoload.php");

// Set Response Headers
Response::header();

// Require All Config Files
array_filter(Directory::configs(), function($path){
    require_once($path);
});

// Debug Mode
if(DEBUG)
{
    ini_set('display_errors', 1);
    ini_set('error_reporting', E_ALL);
}else{
    ini_set('display_errors', 0);
    ini_set('error_reporting', 0);
}

// Handling Errors
set_error_handler('error_handler');
set_exception_handler('exception_handler');
register_shutdown_function('shutdown_handler');