<?php

//this is chain of responsibility pattern
abstract class HomeChecker
{
    protected $successor;

    abstract public function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}
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

//here would presumabably from a form, database resultset etc
class HomeStatus
{
    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = true;
}

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);
