<?php 
/** URI routes for Bouncer
 *
 * @package Bouncer
 * @author Noel Niles <noelniles@gmail.com>
 */
class Routes {
    private $request = ''; 

    private $page = '';
    
    function __construct()
    {
        $this->request = $_SERVER['REQUEST_URI'];
        $this->request = trim($this->request);
        $this->request = filter_var($this->request, FILTER_SANITIZE_URL);
    }

    private function interpret_request()
    {
        switch (basename($this->request)){
            case 'login':
                $this->page = VWS . 'login_view.php';
                break;
            case 'home':
                $this->page = VWS . 'home_view.php';
                break;
            default:
                $this->page = VWS . 'home_view.php';
        }
        include $this->page;
    }

    public function dispatch()
    { 
        if (!empty($this->request)) {
            $this->interpret_request();    
        }
    }
}
