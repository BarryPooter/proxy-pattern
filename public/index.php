<?php
// Include the autoload definitions generated -
// automatically by the Composer.
include_once __DIR__ . '/../vendor/autoload.php';

var_dump("Let's get a Product resource by using the ProductFactory.");
$product = (new \App\Factories\ProductFactory())
    ->build();

var_dump("I just got access to a new Product", $product);
var_dump("I am a User without Admin privileges");

try {
    var_dump("Now I want to attempt to change the Product price.");
    $product->setPrice((float) 0.01);
} catch (\Exception $e) {
    var_dump("It seems like I can't do it!", "The following message got thrown: ". $e->getMessage());
}

var_dump("THE END");
