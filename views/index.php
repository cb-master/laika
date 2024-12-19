<?php
/**
 * Project: Laika MVC Framework
 * Author Name: Showket Ahmed
 * Author Email: riyadhtayf@gmail.com
 */

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

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
    </style>
</head>
<body>
    <div class="body">
        <h1>Laika Framework</h1>
    </div>
</body>
</html>