<?php namespace Acme\Principle\Single;

class HtmlOutput implements SalesOutputInterface
{
    /**
     * Method output
     *
     * @param string $sales Data
     *
     * @return mixed
     */
    public function output($sales)
    {
        return "<h1>Sales:$sales</h1>";
    }
}
