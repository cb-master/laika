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

use CBM\Core\Support\Meta;

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

use CBM\App\Controller;

/**
* class Index Extends Controller
* {
*    public function index()
*    {
*        $data['title'] = 'Laika Home Page';

*        //// For Middleware
*        // $this->middleware('class', 'method', []);
*        //// For View
*        $this->view('index', $data);
*    }
* }
*/

class Index Extends Controller
{
    public function index()
    {
        show(Meta::version(ROOTPATH.'/includes/Info.php'));
        $data['title'] = 'Laika Home Page';
        $this->view('index', $data);
    }
}