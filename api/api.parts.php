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
        $parts = array('Midtjylland', 'Fyn', 'Syddanmark', 'Sjælland', 'Nordjylland');
        foreach($parts as $i => $part) {
            $this->parts->{$i} = $this->addPart($part, 0);
        }
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

    public function getPart($part_id) {
        return $this->parts->{$part_id}->name;
    }

    function __destruct() {

    }
}