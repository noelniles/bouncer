<?php
/** Configuration file for Bouncer 
 *
 * Look at the README.md for information about configing Bouncer.
 *
 * @package Bouncer
 * @author Noel Niles <noelniles@gmail.com>
 */
require_once 'responder.php';
require_once 'routes.php';
require_once 'session.php';

// Turns of error display during development. 
// Valid values are 'development' and 'production'
$production_env = 'development';

switch ($production_env) {
    case 'development':
        error_reporting(-1);
        @ini_set('display_errors', 'On');
    case 'production':
        @ini_set('log_errors', 'On');
        @ini_set('display_errors', 'Off');
}

function tsl($path)
{
    if (substr($path, strlen($path) - 1) != '/') {
        $path .= '/';
    }
}

// Returns the path to the app
function get_root_path()
{
    $pos = strrpos(dirname(__FILE__), DIRECTORY_SEPARATOR . 'web-framework/src');
    $adm = substr(dirname(__FILE__), 0, $pos);
    $pos2 = strrpos($adm, DIRECTORY_SEPARATOR);
    return tsl(substr(__FILE__, 0, $pos2));
}

// Define constansts
define('ROOT', get_root_path());
define('CTL', ROOT . 'controllers/');
define('VWS', ROOT . 'views/');
define('MDL', ROOT . 'models/');
define('CSS', ROOT . 'assets/css/');
define('JS', ROOT . 'assets/js/');
