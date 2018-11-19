<?php

//this is chain of responsibility pattern
require 'vendor/autoload.php';

use Acme\Chain\HomeStatus;
use Acme\Chain\Locks;
use Acme\Chain\Lights;
use Acme\Chain\Alarm;

//..down here will be the entry point eg:index.php, client, controller

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);

echo "if you can see this then the checking chain object is all true!";
