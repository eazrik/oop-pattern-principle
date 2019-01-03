<?php namespace Acme\Pattern\Chain;

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (! $home->alarmOn()) {
            throw new \Exception('The alarm has not been set!');
        }

        $this->next($home);
    }
}
