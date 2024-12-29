<?php
/**
 * Project: Laika MVC Framework
 * Author Name: Showket Ahmed
 * Author Email: riyadhtayf@gmail.com
 */

// Forbidden Access
defined('ROOTPATH') || http_response_code(403);

// Request Deniy If Remote Is Not Server Self
print(json_encode([
    'code'      =>  'AP403',
    'status'    =>  'failed',
    'message'   =>  'Invalid Uri!',
    'data'      =>  []
], JSON_FORCE_OBJECT | JSON_PRETTY_PRINT));
die();