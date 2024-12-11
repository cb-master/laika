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

////////////////////////////////////////////
////////////////////////////////////////////

//// PLEASE DO NOT EDIT AFTER THIS LINE ////

////////////////////////////////////////////
////////////////////////////////////////////

// Initiate Databace Connection Config
CBM\Model\Model::config(CBM\Core\Config::get('database'));