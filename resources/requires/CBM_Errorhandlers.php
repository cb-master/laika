<?php
/**
 * Project: Laika MVC Framework
 * Author Name: Showket Ahmed
 * Author Email: riyadhtayf@gmail.com
 */

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

use CBM\CoreHelper\Error;
use CBM\CoreHelper\Resource;

// Exception Handler
function exception_handler(Throwable $e)
{
    Error::set($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
}

// Exception Handler
function error_handler($severity, $message, $filename, $lineno)
{
    if($severity){
        Error::set($message, 1000, $filename, $lineno);
    }
}

// Shutdown Function
function shutdown_handler()
{
    $e = error_get_last();
    $types = [E_ERROR, E_PARSE, E_CORE_ERROR, E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING, E_RECOVERABLE_ERROR];
    if($e && in_array($e['type'], $types)){
        Error::set($e['message'], 1000, $e['file'], $e['line']);
    }
    // Show Error Messages
    Resource::shutdown_handler_message(Error::errors());
}