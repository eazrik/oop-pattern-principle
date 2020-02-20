<?php

namespace Acme\Pattern\Adapter;

interface BookInterface
{
    /**
     * Method open
     *
     * @return string
     */
    public function open();

    /**
     * Method turnPage
     *
     * @return string
     */
    public function turnPage();
}
