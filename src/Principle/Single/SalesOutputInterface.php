<?php namespace Acme\Principle\Single;

interface SalesOutputInterface
{
    /**
     * Method output
     *
     * @param string $sales Data
     *
     * @return mixed
     */
    public function output($sales);
}
