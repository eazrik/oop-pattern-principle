<?php namespace Acme\Pattern\Strategy;

class LogToXWebservice implements Logger
{
    /**
     * A method
     *
     * @param string $data Data
     *
     * @return void
     */
    public function log($data)
    {
        var_dump('Log the data to a Sass site.');
    }
}
