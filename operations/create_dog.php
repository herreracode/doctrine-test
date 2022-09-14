<?php

// create_bug.php <reporter-id> <engineer-id> <product-ids>
require_once "bootstrap.php";

// list_products.php
require_once "bootstrap.php";

use Herreracode\Doctrinetest\Dog;
use Herreracode\Doctrinetest\Animal;
use Herreracode\Doctrinetest\Cat;
use Herreracode\Doctrinetest\Person;

 
// $productRepository = $entityManager->getRepository(Person::class);


$animalsRepository = $entityManager->getRepository(Animal::class);

// $products = $productRepository->findAll();
$animals = $animalsRepository->findAll();


foreach($animals as $animal){
    var_dump(get_class($animal->getPersons()->first()))  ."\n";
    die();
}



/*
foreach ($products as $product) {

    foreach($product->getAnimals() as $Animal){
        var_dump($Animal->getPersons())  ."\n";
    }
}
*/




/*
$Person2 = $entityManager->find(Person::class, (int) 2);

$entityManager->persist($Person);
$entityManager->flush($Person);

$Person2->assignToAnimal($Person);
*/


/*
$Dog = new Dog();
$Dog->setLastName("perro nuevo last name");
$Dog->setName("perro nuevo nomobnre");

$Person2 = new Person();
$Person2->setName("gerardo");

$Person2->assignToAnimal($Dog);

$entityManager->persist($Dog);
$entityManager->flush();
$entityManager->persist($Person2);
$entityManager->flush();

*/