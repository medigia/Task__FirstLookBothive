<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 05-05-2018
 * Time: 16:49
 */
class parts extends API {

    public $parts;

    function __construct() {
        parent::__construct();
        $this->populate_parts();
    }

    public function populate_parts() {
        $this->parts = new stdClass();
        $this->parts->Midtjylland = $this->addPart('Midtjylland', 0);
        $this->parts->Fyn = $this->addPart('Fyn', 0);
        $this->parts->Syddanmark = $this->addPart('Syddanmark', 0);
        $this->parts->Sjælland = $this->addPart('Sjælland', 0);
        $this->parts->Nordjylland = $this->addPart('Nordjylland', 0);
    }

    protected function addPart($name, $state) {
        $parts           = new stdClass();
        $parts->name     = $name;
        $parts->state    = $state;
        return $parts;
    }

    public function getParts() {
        return $this->parts;
    }

    function __destruct() {

    }
}