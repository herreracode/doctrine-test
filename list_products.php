<?php

// list_products.php
require_once "bootstrap.php";

use Herreracode\Doctrinetest\Product;

$productRepository = $entityManager->getRepository(Product::class);

$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}