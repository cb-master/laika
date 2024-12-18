<?php
/**
 * APP Name:        Laika Framework Core
 * APP Provider:    Showket Ahmed
 * APP Link:        https://cloudbillmaster.com
 * APP Contact:     riyadtayf@gmail.com
 * APP Version:     1.0.0
 * APP Company:     Cloud Bill Master Ltd.
 */

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

use CBM\Core\Support\Convert;
use CBM\Core\Filter;
use CBM\Core\Option;

// Dump Data & Die
function dd($data, bool $die = false):void
{
    echo '<pre style="background-color:#000;color:#fff;">';
    var_dump($data);
    echo '</pre>';
    $die ? die() : $die;
}

// Show Data & Die
function show($data, bool $die = false):void
{
    echo '<pre style="background-color:#000;color:#fff;">';
    print_r($data);
    echo '</pre>';
    $die ? die() : $die;
}

// To JSON
/**
 * @param mixed $property - Required Argument.
 * @param int $type - Default Value is JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT.
 */
function toJson(array $array, $type = JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT):string
{
    return Convert::toJson($array, $type);
}

// To Array
/**
 * @param mixed $property - Required Argument
 */
function toArray(mixed $property):array
{
    return Convert::toArray($property);
}

// To Object
/**
 * @param mixed $property - Required Argument
 */
function toObject(mixed $property):object
{
    return Convert::toObject($property);
}

// Convert To Float Number
/**
 * @param int|string|float|null $number - Required Argument
 * @param int|string $decimal - Default is 2
 * @param string $thousands_separator - Default is Blank String ''
 */
function toDecinal(int|string|float|null $number, int|string $decimal = 2, string $thousands_separator = ''):string
{
    return Convert::toDecinal($number, $decimal, $thousands_separator);
}

// Convert to Price
function toPrice(string|int|float $price = NULL, int|string $decimal = 2):string
{
    $decimal = (int) $decimal;
    $price = toDecinal($price, $decimal);
    return Option::get('currencypfx') . $price;
}

// Show Date in a Format
function toDate(?string $date)
{
    $date = is_string($date) ? $date : time();
    if($date){
        return Dates::to_date($date);
    }
    return Lang::$noDate;
}

// Local Date
function localDateTime(?string $datetime)
{
    if($datetime){
        $str = strtotime($datetime);
        return date('Y-m-d\TH:i:s', $str);
    }
    return '0000-00-00T00:00:00';
}

// Check Staff Has Access
function access(string $access):bool
{
    $accessList = json_decode(App::load()->session->get('admin_access_list', ADMIN));
    return $accessList->$access ?? false;
}

// Staff Has Permission "Comma Separated Value"
function hasPermission(string $access, string $location = '')
{
    $permissions = explode(',', $access);
    foreach($permissions as $permission)
    {
        if(!access(trim($permission)))
        {
            if(str_contains($permission, 'view')){
                setMessage(LANG::$noViewPermission, false);
            }elseif(str_contains($permission, 'add')){
                setMessage(LANG::$noAddPermission, false);
            }elseif(str_contains($permission, 'edit')){
                setMessage(LANG::$noEditPermission, false);
            }elseif(str_contains($permission, 'remove')){
                setMessage(LANG::$noRemovePermission, false);
            }else{
                setMessage(LANG::$noPermission, false);
            }
            redirect($location);
        }
    }
}

// Add Filter
function add_filter(string $filter, callable $callback)
{
    return Filter::add($filter, $callback);
}

// Add Filter
function do_filter(string $filter, mixed ...$args)
{
    return Filter::action($filter, ...$args);
}