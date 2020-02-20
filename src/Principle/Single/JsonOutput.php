<?php namespace Acme\Principle\Single;

class JsonOutput implements SalesOutputInterface
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
        return json_encode($sales);
    }
}
