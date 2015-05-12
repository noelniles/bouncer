<?php 
/** URI routes for Bouncer
 *
 * @package Bouncer
 * @author Noel Niles <noelniles@gmail.com>
 */
class Routes {
    private $request = '';

    function __construct()
    {
        array_filter($_SERVER['REQUEST_URI'], 'sanitize_uri');    
    }

    private function sanitize_uri(&$uri)
    {
        $uri = trim($uri);
        $uri - filter_var($uri, FILTER_SANITIZE_URI);
    }
}
