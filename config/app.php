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
    //// Return Application Constants as Array

    // App Name
    'name'  =>  'Laika',

    // Provider
    'provider'  =>  'Cloud Bill Master',

    // Provider Website
    'provider_uri'  =>  'https://cloudbillmaster.com',

    // System Encryption Method
    'encryption_method' =>  'AES-256-CBC',

    // System Debug
    'debug' =>  true
];