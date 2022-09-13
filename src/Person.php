<?php

namespace Herreracode\Doctrinetest;

class Person extends Animal
{

    private $animal;

     /**
     * @var string
     */
    private $name;

    

    public function assignToAnimal(Animal $animal)
    {
        $this->animal[] = $animal;
    }

    public function getAnimals(){
        return $this->animal;
    }

    public function getProducts()
    {
        return $this->products;
    }


}