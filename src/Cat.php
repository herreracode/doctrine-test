<?php

namespace Herreracode\Doctrinetest;

class Cat extends Animal
{
     /**
     * @var string
     */
    private $last_name;

    public function setLastName($name){
        $this->last_name = $name;
    }
}