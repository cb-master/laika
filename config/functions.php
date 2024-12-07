<?php
/**
 * APP Name:        Laika Framework Core
 * APP Provider:    Showket Ahmed
 * APP Link:        https://cloudbillmaster.com
 * APP Contact:     riyadtayf@gmail.com
 * APP Version:     1.0.0
 * APP Company:     Cloud Bill Master Ltd.
 */

use CBM\CoreHelper\CoreException;

// Exception Handler
function exception_handler(Throwable $e)
{
    CoreException::set($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
}

// Exception Handler
function error_handler($severity, $message, $filename, $lineno)
{
    if($severity){
        CoreException::set($message, 1000, $filename, $lineno);
    }
}

// Shutdown Function
function shutdown_handler()
{
    $e = error_get_last();
    $types = [E_ERROR, E_PARSE, E_CORE_ERROR, E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING, E_RECOVERABLE_ERROR];
    if($e && in_array($e['type'], $types)){
        CoreException::set($e['message'], 1000, $e['file'], $e['line']);
    }
    
    // Show Errors if Exist
    $errors = CoreException::errors();
    if(!empty($errors)){
        http_response_code(500);
        $html = "<style>
        body{
            position:relative;
            margin:0;
        }
            div{
                text-align:left!important;
            }
            /* PHP Error CSS Start */
            .err-box{
                display:block;
                overflow-x:auto;
                font-family: monospace;
                background:#f6e0e0!important;
                position:absolute!important;
                top:0px!important;
                width:100%;
                height:100vh;
                left:0px!important;
                z-index:9999999!important;
            }
            .err-contents{
                margin:auto!important;
                width:80%!important;
            }
            .err-box h2{
                font-size:28px;
                text-transform:uppercase;
                text-align:center;
                color:#a50404!important;
                margin-top:100px!important;
            }
            .table{
                width:100%;
            }
            table{
                color:#a50404!important;
                text-align:left;
                width:100%;
            }
            th{
                font-size:15px;
                padding: 10px 5px;
                font-weight:bold;
                text-transform:uppercase;
            }
            td{
                min-width:20%;
                max-width:100%;
                font-size:14px!important;
                margin-bottom:5px;
                padding:5px;
            }
            table,th,td{
                border:1px solid #a50404;
                border-collapse: collapse;
            }
            /* PHP Error CSS End */
        </style>
        <div class=\"err-box\">
            <div class=\"err-contents\">
                <h2>APP ERROR</h2>
                <div class='table'>
                    <table>
                        <tr>
                            <th>Code</th>
                            <th>Messages</th>
                            <th>File</th>
                            <th>Line</th>
                        </tr>\n";
                        foreach($errors as $error):
                            $html .= "<tr>
                            <td>{$error['code']}</td>
                            <td>{$error['message']}</td>
                            <td>{$error['file']}</td>
                            <td>{$error['line']}</td>
                        </tr>";
                        endforeach;
                        
                    $html .= "</table>
                </div>
            </div>
        </div>";
    echo $html;
    // die;
    }
}