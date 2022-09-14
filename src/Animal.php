<?php

namespace Herreracode\Doctrinetest;

abstract class Animal
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;

    private $persons;

    public function setName($name){

        $this->name = $name;
    
    }

    public function getName(){

        return $this->name;
    }

    public function getId(){
        return $this->id;
    }

    public function getPersons()
    {
        return $this->persons;
    }
}