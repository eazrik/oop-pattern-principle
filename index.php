<?php
//this is adapter pattern
require 'vendor/autoload.php';

use Acme\BookInterface;
use Acme\eReaderAdapter;
use Acme\Kindle;
use Acme\Book;
use Acme\Nook;

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