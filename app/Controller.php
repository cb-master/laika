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

use CBM\CoreHelper\Error;
use CBM\Core\Option;

final class Controller
{
    // Load View
    /**
     * @param array $data - Required Argument as datas to pass array keys as variable in view file
     * @param string $for - Default is null to load Front View. For Backend like admin or panel use constant ADMIN or other custom CONSTANTS as string
     */
    public static function view(array $data = [], ?string $for = 'front'):void
    {
        extract($data);

        $for = strtolower($for);
        $path = ROOTPATH . "/views/{$for}";

        // Check Theme Name Exist in DB
        $str = "{$for}Theme";
        $theme = Option::get($str);
        if(!$theme){
            $theme = "default";
            Option::set($str, $theme);
        }

        // Create Folder if Not Exist
        if(!file_exists("{$path}/{$theme}")){
            try {
                if(!mkdir("{$path}/{$theme}")){
                    throw new Error("Unable to Make '{$theme}' Theme Directory", 80000);
                }
            } catch (Error $e) {
                Error::throw($e);
            }
        }

        // $header = ROOTPATH."/view/{$for}/";
    }
}