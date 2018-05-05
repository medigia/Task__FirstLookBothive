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

    function __destruct() {

    }
}