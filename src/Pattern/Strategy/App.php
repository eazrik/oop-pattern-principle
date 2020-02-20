<?php namespace Acme\Pattern\Strategy;

class App
{
    /**
     * Method log
     *
     * @param $data Data
     * @param $logger Logger
     *
     * @return string
     */
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ? : new LogToFile;
        $logger->log($data);
    }
}
