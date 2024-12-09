<?php
/**
 * APP Name:        Laika Framework Core
 * APP Provider:    Showket Ahmed
 * APP Link:        https://cloudbillmaster.com
 * APP Contact:     riyadtayf@gmail.com
 * APP Version:     1.0.0
 * APP Company:     Cloud Bill Master Ltd.
 */

// Namespace
namespace CBM\App;

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

use CBM\CoreHelper\Error;
use CBM\Core\Option;
use CBM\Core\Uri\Uri;

class Controller
{
    // Load Middleware and Execute
    /**
     * @param string $class - Required Argument as Middleware Class Name Like 'Client'.
     * @param string $method - Required Argument as Middleware Method Name.
     */
    protected function middleware(string $class, string $method):void
    {
        // Create Middleware Folder if Does Not Exist
        if(!file_exists(ROOTPATH.'/app/Middleware')){
            mkdir(ROOTPATH.'/app/Middleware');
        }
        // Load Middleware if Exist
        $class = "\\CBM\\App\\Middleware\\{$class}";
        if(class_exists($class) && (method_exists($class, $method))){
            call_user_func([new $class, $method]);
        }
    }

    // Load View
    /**
     * @param string $view - Required Argument as view file
     * @param array $data - Required Argument as datas to pass array keys as variable in view file
     * @param string $for - Default is null to load Front View. For Backend like admin or panel use constant ADMIN or other custom CONSTANTS as string
     */
    protected function view(string $view, array $data = [], ?string $for = 'front'):void
    {
        $for = strtolower($for);
        // Extract Data to the View
        extract($data);
        // Get Theme Directory
        $path = Uri::path(ROOTPATH . "/views/{$for}");

        // Check Theme Name Exist in DB
        $str = "{$for}Theme";

        // Get Theme Name
        $theme = Option::get($str);
        if(!$theme){
            $theme = "default";
            Option::set($str, $theme);
        }

        // Theme Directory
        $theme_directory = Uri::path("{$path}/{$theme}");

        // Theme File
        $view = "{$theme_directory}/{$view}.php";

        if(!file_exists($view)){
            throw new Error("{$view} File Does Not Exist", 80000);
        }
        
        // Load View File
        require_once($view);
    }
}