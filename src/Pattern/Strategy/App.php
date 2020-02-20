<?php namespace Acme\Pattern\Strategy;

class App
{
    /**
     * Method log
     *
     * @param string $data Data
     * @param Logger $logger Logger
     *
     * @return void
     */
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ? : new LogToFile;
        $logger->log($data);
    }
}
