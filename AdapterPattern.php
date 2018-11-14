<?php
//this is adapter pattern
require 'vendor/autoload.php';

use Acme\Adapter\BookInterface;
use Acme\Adapter\eReaderAdapter;
use Acme\Adapter\Kindle;
use Acme\Adapter\Book;
use Acme\Adapter\Nook;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}
(new Person)->read(new Book);
(new Person)->read(new eReaderAdapter(new Kindle));
(new Person)->read(new eReaderAdapter(new Nook));
