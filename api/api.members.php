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
        $data = '';


        $this->populate_members();
        if($this->CHECK_VAR('fetch_all')) {
            $data = $this->fetch_all();
        }

        echo json_encode($data);
    }

    public function populate_members()
    {
        //Make object
        $members = new stdClass();

        $members->{"Mike Sørensen"} = $this->addNew(1,'Mike Sørensen', 0, 0, $this->getPart(0));
        $members->{"Dennis Holmgreen"} = $this->addNew(2,'Dennis Holmgreen', 0, 1, $this->getPart(1));
        $members->{"Jesper Holm"} = $this->addNew(3,'Jesper Holm', 0, 1, $this->getPart(1));

        $this->members = $members;
        return $members;
    }

    public function addNew($id, $name, $state, $partid, $part) {
        $members           = new stdClass();
        $members->id       = $id;
        $members->name     = $name;
        $members->state    = $state;
        $members->partid   = $partid;
        $members->part     = $part;
        return $members;
    }

    public function activate_member()
    {

    }
    
    public function fetch_all() {
        $parts = $this->getParts();
        $members = $this->members;
        return array('parts' => $parts, 'members' => $members);
    }

    function __destruct()
    {
        parent::__destruct();
    }
}
