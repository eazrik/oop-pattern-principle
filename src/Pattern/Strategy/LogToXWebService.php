<?php namespace Acme\Pattern\Strategy;

class LogToXWebservice implements Logger
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
        var_dump('Log the data to a Sass site.');
    }
}
