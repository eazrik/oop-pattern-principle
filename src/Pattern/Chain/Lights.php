<?php namespace Acme\Pattern\Chain;

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
