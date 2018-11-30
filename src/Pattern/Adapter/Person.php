<?php namespace Acme\Pattern\Adapter;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}
