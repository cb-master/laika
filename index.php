<?php
/**
 * APP Name:        Laika Framework Core
 * APP Provider:    Showket Ahmed
 * APP Link:        https://cloudbillmaster.com
 * APP Contact:     riyadtayf@gmail.com
 * APP Version:     1.0.0
 * APP Company:     Cloud Bill Master Ltd.
 */

 // Define Rootpath
define('ROOTPATH', __DIR__);

use CBM\Core\App\App;

// Require Init File
require_once(ROOTPATH."/includes/Init.php");

// Run Application
App::run();