<?php

// create_bug.php <reporter-id> <engineer-id> <product-ids>
require_once "bootstrap.php";

// list_products.php
require_once "bootstrap.php";

use Herreracode\Doctrinetest\Dog;
use Herreracode\Doctrinetest\Animal;
use Herreracode\Doctrinetest\Cat;
use Herreracode\Doctrinetest\Person;

 
$productRepository = $entityManager->getRepository(Person::class);

$products = $productRepository->findAll();



foreach ($products as $product) {

    foreach($product->getAnimals() as $Animal){
        echo get_class($Animal) ."\n";
    }
}


/*
$Person = new Dog();
$Person->setLastName("perro nuevo last name");
$Person->setName("perro nuevo nomobnre");

$Person2 = $entityManager->find(Person::class, (int) 2);

$entityManager->persist($Person);
$entityManager->flush($Person);

$Person2->assignToAnimal($Person);


$entityManager->persist($Person2);
$entityManager->flush();

*/