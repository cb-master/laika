<?php
/**
 * Project: Laika MVC Framework
 * Author Name: Showket Ahmed
 * Author Email: riyadhtayf@gmail.com
 */

// Forbidden Access
defined('ROOTPATH') || http_response_code(403).die('403 Forbidden Access!');

use CBM\Core\Support\Convert;
use CBM\Core\Filter;
use CBM\Core\Option;
use CBM\Session\Session;
use CBM\Core\Helper;

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
/**
 * @param int|string|float|null $price - Default is null
 * @param int|string $decimal - Default is 2
 * @return string
 */
function toPrice(string|int|float $price = null, int $decimal = 2):string
{
    $price = toDecinal($price, $decimal);
    return Option::get('currencypfx') . $price;
}

// Local Date
/**
 * @param string|null $date - Default is null
 */
function localDateTime(?string $datetime)
{
    return $datetime ? date('Y-m-d\TH:i:s', strtotime($datetime)) : '0000-00-00T00:00:00';
}

// Redirect
/**
 * @param string $slug - Required Argument
 * @param int $response - Default is 302
 */
function redirect(string $slug, int $response = 302):void
{
    Helper::redirect($slug, $response);
}

// Check Staff Has Access
/**
 * @param string $access - Required Argument
 * @param string $for - Required Argument. Default is 'staff'
 */
function access(string $access, string $for):bool
{
    $accessList = json_decode(Session::get('access_list', $for));
    return $accessList->$access ?? $accessList[$access] ?? false;
}

// Staff Has Permission "Comma Separated Value"
function hasPermission(string $access, string $for, string $slug = '')
{
    if(!access(trim($access), $for))
    {
        Message::set('Permission Denied! Please Contact Administrator.', false);
        Helper::redirect($slug);
    }
}

// Add Filter
function add_action(string $filter, callable $callback)
{
    return Filter::add($filter, $callback);
}

// Add Filter
function do_action(string $filter, mixed ...$args)
{
    return Filter::do($filter, ...$args);
}