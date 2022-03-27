<?php
// show_product.php <id>
require_once "bootstrap.php";

use Herreracode\Doctrinetest\Product;

$id = $argv[1];
$product = $entityManager->find(Product::class, $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());