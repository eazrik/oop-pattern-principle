<?php namespace Acme\Pattern\Chain;

class Locks extends HomeChecker
{
    /**
     * Method check
     *
     * @param HomeStatus $home Home
     *
     * @return mixed
     */
    public function check(HomeStatus $home)
    {
        if (! $home->locked()) {
            throw new \Exception('The doors are not locked!');
        }

        $this->next($home);
    }
}
