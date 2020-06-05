<?php

use DesignPatterns\Structural\Decorator\HardcoverBookDecorator;
use DesignPatterns\Structural\Decorator\HighlightedBookDecorator;
use DesignPatterns\Structural\Decorator\SimpleBook;

require_once __DIR__ . "/../../../vendor/autoload.php";

function main()
{
    $book = new SimpleBook('Cooking Guide', 'Laura Salmonella', 12.99);
    echo "Simple Book: \n";
    echo $book;

    $hardcoverDecorator = new HardcoverBookDecorator($book);
    echo "Hardcover Book: \n";
    echo $hardcoverDecorator;

    $highBookDecorator = new HighlightedBookDecorator($hardcoverDecorator);
    echo "Highlight + Hardcover Book: \n";
    echo $highBookDecorator;
}

main();
