<?php namespace Acme\Pattern\Strategy;

interface Logger
{
    /**
     * Method log
     *
     * @param string $data Data
     *
     * @return string
     */
    public function log($data);
}
