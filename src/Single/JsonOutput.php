<?php namespace Acme\Single;

class JsonOutput implements SalesOutputInterface
{
    public function output($sales)
    {
        return json_encode($sales);
    }
}
