<?php

//this is chain of responsibility pattern
require 'vendor/autoload.php';

use Acme\Chain\HomeChecker;
use Acme\Chain\HomeStatus;

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (! $home->locked) {
            throw new Exception('The doors are not locked!');
        }

        $this->next($home);
    }
}

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (! $home->lightsOff) {
            throw new Exception('The lights are still off!');
        }

        $this->next($home);
    }
}

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (! $home->alarmOn) {
            throw new Exception('The alarm has not been set!');
        }

        $this->next($home);
    }
}

//..down here will be the entry point eg:index.php, client, controller



$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);

echo "if you can see this then the checking chain object is all true!";
