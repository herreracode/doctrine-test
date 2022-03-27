<?php
// create_user.php

require_once "bootstrap.php";


use Herreracode\Doctrinetest\User;

$newUsername = $argv[1];

$user = new User();
$user->setName($newUsername);

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->getId() . "\n";
