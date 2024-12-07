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

// Define Admin Slug
/**
 * 
 * @param ADMIN - Default is admin
 * 
 */
define('ADMIN', 'admin');


// Define Application Name
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

// Define Debug Mode
/**
 * 
 * @param DEBUG - Default is false
 * 
 */
define('DEBUG', true);