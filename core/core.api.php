<?php
/**
**  API ENGINE
**
**
*/
class API extends system {

    protected $apikey = 'A3622LksldWW239AALKS';

    function __construct() {
        if($_GET['ep']) :
            $this->findEndpoint($GET['ep']);
        endif;
    }

    public function findEndpoint($endpoint) {
        $this->currentEndpoint = $endpoint;
        $this->$endpoint();
    }

    public function checkApiKey($apiKey) {
        if($this->apikey == $apiKey) :
            return true;
        else :
            return false;
        endif;
    }

    public function GET_VAR($get) {
        if(isset($_GET[$get])) {
            return $_GET[$get];
        } else {
            throw new Exception('Get variable not found. API Will not run with GET data.');
        }
    }

    public function CHECK_VAR($get) {
        if(isset($_GET[$get])) {
            return true;
        } else {
            return false;
        }
    }

    function __destruct() {

    }
}