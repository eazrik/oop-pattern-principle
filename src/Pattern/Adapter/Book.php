<?php

namespace Acme\Pattern\Adapter;

class Book implements BookInterface
{
    /**
     * Method open
     *
     * @return void
     */
    public function open()
    {
        var_dump('opening the paper book');
    }

    /**
     * Method turnPage
     *
     * @return void
     */
    public function turnPage()
    {
        var_dump('turning the page of the paper book');
    }
}
