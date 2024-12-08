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
namespace CBM\App\Controller;

use CBM\Core\Response\Response;

class _404
{
    public function index()
    {
        // Set HTTP Response Code
        Response::set(404);
        echo 'Page Not Found';
    }
}