<?php

/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 05-05-2018
 * Time: 14:21
 */
class members extends parts
{

    private $members;

    function __construct()
    {
        parent::__construct();

        $this->populate_members();
    }

    public function populate_members()
    {
        //Make object
        $members = new stdClass();


        $members->{"Mike Sørensen"} = $this->addNew('Mike Sørensen', 0, 'Midtjylland');
        $members->{"Dennis Holmgreen"} = $this->addNew('Dennis Holmgreen', 0, 'Syddanmark');
        $members->{"Jesper Holm"} = $this->addNew('Jesper Holm', 0, 'Fyn');

        $this->members = $members;
        echo '<pre>';
            print_r($this->getParts());
        echo '</pre>';
        return $members;
    }

    public function addNew($name, $state, $part) {
        $members           = new stdClass();
        $members->name     = $name;
        $members->state    = $state;
        $members->part     = $part;
        return $members;
    }

    public function activate_member()
    {

    }

    function __destruct()
    {
        parent::__destruct();
    }
}
