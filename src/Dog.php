<?php

namespace Herreracode\Doctrinetest;

class Dog extends Animal
{

    private $last_name;


    public function setLastName($name){

        $this->last_name = $name;
    
    }

    public function getLastName(){

        return $this->last_name;
    
    }
}