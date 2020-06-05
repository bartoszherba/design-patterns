<?php

use DesignPatterns\Behavioral\Observer\Logger;
use DesignPatterns\Behavioral\Observer\SayAgain;

require_once __DIR__ . "/../../../vendor/autoload.php";

$repeater = new SayAgain();
$logger1 = new Logger('FIRST');
$logger2 = new Logger('SECOND');

$repeater->attach($logger1);
$repeater->attach($logger2);

$repeater->repeat($argv[1], $argv[2] ?? 1);
