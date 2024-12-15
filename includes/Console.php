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
defined('CONSOLEPATH') || http_response_code(403).die('403 Forbidden Access!');

// Get Database Configs
$configs[basename(CONSOLEPATH.'/config/database.php', '.php')] = require(CONSOLEPATH.'/config/database.php');

// Require Autoload
require_once(CONSOLEPATH."/vendor/autoload.php");

// Set Config Environments
CBM\Core\Config::set($configs);

// Get Db Connection File
CBM\Model\Model::config(CBM\Core\Config::get('database'));