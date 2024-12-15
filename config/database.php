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
defined('ROOTPATH') || defined('CONSOLEPATH') || http_response_code(403).die('403 Forbidden Access!');

return [
    //// Return Database Connection Details
    /**
     * Maria DB
     */

    // DB Driver
    'driver'     =>  'mariadb',

    // DB Host
    'host'       =>  'localhost',

    // DB Port
    'port'       =>  3306,

    // DB Name
    'name'       =>  'test',

    // DB User
    'user'       =>  'root',

    // DB Password
    'password'   =>  '',


    /**
     * Mysql DB
     */

    // // DB Driver
    // 'driver'     =>  'mysql',

    // // DB Host
    // 'host'       =>  'localhost',

    // // DB Port
    // 'port'       =>  3306,

    // // DB Name
    // 'name'       =>  'test',

    // // DB User
    // 'user'       =>  'root',

    // // DB Password
    // 'password'   =>  ''





    // DB Fetch as Object
    'object'        =>  true
];