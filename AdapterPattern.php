<?php
//this is adapter pattern
require 'vendor/autoload.php';

use Acme\Pattern\Adapter\BookInterface;
use Acme\Pattern\Adapter\eReaderAdapter;
use Acme\Pattern\Adapter\Kindle;
use Acme\Pattern\Adapter\Book;
use Acme\Pattern\Adapter\Nook;

//usage
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
