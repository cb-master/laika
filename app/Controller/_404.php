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

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

use CBM\App\Controller;
use CBM\Core\Response\Response;


class _404 Extends Controller
{
    public function index()
    {
        $data['title'] = '404 Page Not Found';

        $this->view('_404', $data);
    }
}