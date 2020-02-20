<?php namespace Acme\Pattern\Strategy;

//1. define a family of algorithms

class LogToFile implements Logger
{
    /**
     * Method log
     *
     * @param $data Data
     *
     * @return string
     */
    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}
