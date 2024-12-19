<?php
/**
 * Project: Laika MVC Framework
 * Author Name: Showket Ahmed
 * Author Email: riyadhtayf@gmail.com
 */

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

use CBM\Core\Uri\Uri;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            width:100%;
            width:100%;
        }
        .body{
            width:100%;
            height:100vh;
            display:flex;
            align-items:center;
            justify-content: center;
        }
        img{
            display:block;
        }
        h1{
            color:red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="body">
        <div>
            <img src="<?= Uri::app_uri()."/assets/images/page-not-found.svg" ?>" alt="" width="400">
            <h1>Page Not Found!</h1>
        </div>
    </div>
</body>
</html>