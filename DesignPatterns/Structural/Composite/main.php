<?php
use DesignPatterns\Structural\Composite\Box;
use DesignPatterns\Structural\Composite\Product;

require_once __DIR__ . "/../../../vendor/autoload.php";

function main()
{
    // Creating main box and boxes compound items
    $mainBox = new Box(22);
    $smallBox1 = new Box(0);
    $smallBox2 = new Box(0);

    // Creating packable products
    $doll = new Product(12.99);
    $sheet = new Product(9.99);
    $pencils = new Product(1.19);

    // Adds products into containers
    $smallBox1->add($doll);
    $smallBox2->add($sheet)->add($pencils);

    $mainBox->add($smallBox1)->add($smallBox2);

    // Calculating final price of a package
    echo $mainBox->getPrice() . "\r\n";
}

main();
