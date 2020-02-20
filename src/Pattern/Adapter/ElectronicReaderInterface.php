<?php

namespace Acme\Pattern\Adapter;

interface ElectronicReaderInterface
{
    /**
     * Method turnOn
     *
     * @return string
     */
    public function turnOn();

    /**
     * Method pressNextButton
     *
     * @return string
     */
    public function pressNextButton();
}
