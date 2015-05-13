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
        $this->$request = $_SERVER['REQUEST_URI'];
        array_filter($this->$request, 'sanitize_uri');    
    }

    private function sanitize_uri(&$uri)
    {
        $uri = trim($uri);
        $uri - filter_var($uri, FILTER_SANITIZE_URI);
    }

    private function interpret_request()
    {
        switch ($this->$request){
            case 'login':
                $page = VWS . 'login_view.php';
                break;
            case 'home':
                $page = VWS . 'home_view.php';
                break;
            default:
                $page = VWS . 'login_view.php';
        } 
    }

    public static function dispatch()
    { 
        if (!empty($request)) {
            $this->$interpret_request();    
        }
    }
}
