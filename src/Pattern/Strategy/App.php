<?php namespace Acme\Pattern\Strategy;

use Acme\Pattern\Adapter\eReaderInterface;

class App
{
    /**
     * A method
     *
     * @param string $data Data
     * @param Logger $logger Logger Interface
     *
     * @return void
     */
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ? : new LogToFile;
        $logger->log($data);
    }
}
