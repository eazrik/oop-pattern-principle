<?php
//this is strategy pattern
//1. define a family of algorithms
//2. encapsulate each one and make then interchangeable
//and ultimately by leveraging polymorphism we'are able to build loosely coupled application
//where we are able to swap in and out various components at runtime

//2. encapsulate each one and make then interchangeable = implements contract/interface

require 'vendor/autoload.php';

use Acme\Strategy\Logger;

//1. define a family of algorithms
class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to the database');
    }
}

class LogToXWebservice implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to a Sass site.');
    }
}

//usage
//and ultimately by leveraging polymorphism we'are able to build loosely coupled application
class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ? : new LogToFile;
        $logger->log($data);
    }
}

$app = new App;

$app->log('Some information here');
echo '<br>';
$app->log('Some information here', new LogToDatabase);
echo '<br>';
$app->log('Some information here', new LogToXWebservice);
