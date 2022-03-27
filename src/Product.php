<?php

namespace Herreracode\Doctrinetest;

class Product
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;


    public function setName($name){

        $this->name = $name;
    
    }

    public function getName($name){

        $this->name = $name;
    }

    public function getId(){
        return $this->id;
    }
}