<?php

//SOLID Principles in PHP . Open-Closed principle represent = 'O' in SOLID
//open-closed principle
//entities/class should be open for extension, but closed for modification
//closed = our goal(although not all but strive for to avoide code rot) = change behaviour without modifying source code
//when you have a module that you want to modify, then separate extensible behavior behind an interface and flip the dependencies.

require 'vendor/autoload.php';

use Acme\OpenClosed\AreaCalculator;
use Acme\OpenClosed\Circle;
use Acme\OpenClosed\Square;

$shapes = [
    new Circle('12'),
    new Square('100', '10')
];
$things =  (new AreaCalculator)->calculate($shapes);
var_dump($things);
