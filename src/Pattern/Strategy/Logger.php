<?php namespace Acme\Pattern\Strategy;

interface Logger
{
    /**
     * Method log
     *
     * @param $data Data
     *
     * @return string
     */
    public function log($data);
}
