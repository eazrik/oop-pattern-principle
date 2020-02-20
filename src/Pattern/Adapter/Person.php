<?php namespace Acme\Pattern\Adapter;

class Person
{
    /**
     * Method read
     *
     * @param $book Book
     *
     * @return void
     */
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}
