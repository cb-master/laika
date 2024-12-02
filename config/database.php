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


// Define Database Driver
define('DB_DRIVER', 'mariadb');

// Define Database Host
define('DB_HOST', 'localhost');

// Define Database Port
define('DB_PORT', 3306);

// Define Database Name
define('DB_NAME', 'test');

// Define Database User
define('DB_USER', 'root');

// Define Database User
define('DB_PASSWORD', '');

// Define Database Fetch Object
define('DB_FETCH_OBJECT', true);



////////////////////////////////////////////
////////////////////////////////////////////

//// PLEASE DO NOT EDIT AFTER THIS LINE ////

////////////////////////////////////////////
////////////////////////////////////////////
CBM\Model\Model::config([
    'driver'    =>  DB_DRIVER,
    'host'      =>  DB_HOST,
    'port'      =>  DB_PORT,
    'name'      =>  DB_NAME,
    'user'      =>  DB_USER,
    'password'  =>  DB_PASSWORD,
    'object'    =>  DB_FETCH_OBJECT
]);