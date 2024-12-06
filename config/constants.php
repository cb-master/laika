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
/**
 * 
 * @param APP_NAME - Default is Laika
 * 
 */
define('APP_NAME', 'Laika');

// Define Encryption Method
/**
 * 
 * @param ENCRYPTION_METHOD - Default is AES-256-CBC
 * 
 */
define('ENCRYPTION_METHOD', 'AES-256-CBC');

