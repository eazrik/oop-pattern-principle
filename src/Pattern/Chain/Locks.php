<?php namespace Acme\Pattern\Chain;

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
