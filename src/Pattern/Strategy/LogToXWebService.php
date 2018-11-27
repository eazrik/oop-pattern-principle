<?php namespace Acme\Pattern\Strategy;

class LogToXWebservice implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to a Sass site.');
    }
}
