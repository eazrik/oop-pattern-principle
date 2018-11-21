<?php namespace Acme\Principle\Single;

class JsonOutput implements SalesOutputInterface
{
    public function output($sales)
    {
        return json_encode($sales);
    }
}
