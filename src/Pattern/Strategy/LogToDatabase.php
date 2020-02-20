<?php
namespace Acme\Pattern\Strategy;

class LogToDatabase implements Logger
{
    /**
     * Method log
     *
     * @param string $data Data
     *
     * @return void
     */
    public function log($data)
    {
        var_dump('Log the data to the database');
    }
}
