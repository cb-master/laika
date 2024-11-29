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

use CBM\Core\Converter\Converter;

// Require Init File
require_once(ROOTPATH."/app/Init.php");



// use CBM\Core\Uri\Uri;
// use CBM\Model\Model;
// use CBM\Core\Request\Request;

// Model::config([
//     'driver'    =>  'mysql',
//     'name'      =>  'test',
//     'user'      =>  'root',
//     'password'  =>  ''
// ]);



// krsort($arr);
$arr = [
    'name'  =>  'New Name',
    'subject'   =>  ['math', 'physics']
];

$obj = new stdClass;
$obj->name = 'Showket';
$obj->name2 = 'Ahmed';


echo '<pre>';
var_dump((int) '1,000');
