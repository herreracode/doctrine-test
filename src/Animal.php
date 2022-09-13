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

    private $Persons;

    public function setName($name){

        $this->name = $name;
    
    }

    public function getName(){

        return $this->name;
    }

    public function getId(){
        return $this->id;
    }
}