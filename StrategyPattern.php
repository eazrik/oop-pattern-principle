<?php
//this is strategy pattern
//1. define a family of algorithms
//2. encapsulate each one and make then interchangeable
//and ultimately by leveraging polymorphism we'are able to build loosely coupled application
//where we are able to swap in and out various components at runtime

//2. encapsulate each one and make then interchangeable = implements contract/interface

require 'vendor/autoload.php';

use Acme\Pattern\Strategy\LogToDatabase;
// use Acme\Pattern\Strategy\LogToXWebservice;
use Acme\Pattern\Strategy\App;

//usage
//and ultimately by leveraging polymorphism we'are able to build loosely coupled application


$app = new App;

$app->log('Some information here');
echo '<br>';
$app->log('Some information here', new LogToDatabase);
// echo '<br>';
// $app->log('Some information here', new LogToXWebservice);
