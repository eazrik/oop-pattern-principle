<?php
//SOLID Principles in PHP . Single Responsibility represent = 'S' in SOLID
//a class should have one, and only one reason to change
require 'vendor/autoload.php';

use Acme\Single\SalesReporter;
use Acme\Single\HtmlOutput;
use Acme\Single\JsonOutput;
use Acme\Single\Repository\SalesRepository;

echo (new SalesReporter(new SalesRepository))->between('2012-12-11', '2012-12-01', new HtmlOutput);
echo '<br>';
echo (new SalesReporter(new SalesRepository))->between('2012-12-11', '2012-12-01', new JsonOutput);
