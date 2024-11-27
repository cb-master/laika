<?php
define('ROOTPATH', __DIR__);
require_once(__DIR__."/vendor/autoload.php");

use CBM\Core\Uri\Uri;
use CBM\Model\Model;

Model::config([
    'driver'    =>  'mysql',
    'name'      =>  'test',
    'user'      =>  'root',
    'password'  =>  ''
]);

echo '<pre>';
var_dump(Uri::in_slug('sddsd'));
echo '</pre>';
