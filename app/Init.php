<?php
/**
 * APP Name:        Laika Framework Core
 * APP Provider:    Showket Ahmed
 * APP Link:        https://cloudbillmaster.com
 * APP Contact:     riyadtayf@gmail.com
 * APP Version:     1.0.0
 * APP Company:     Cloud Bill Master Ltd.
 */

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

use CBM\Core\Support\Directory;
use CBM\Core\Response\Response;

// Require Autoload
require_once(ROOTPATH."/vendor/autoload.php");

// Set Headers
Response::header();

// Require All Config Files
array_filter(Directory::configs(), function($path){
    require_once($path);
});