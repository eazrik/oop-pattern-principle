<?php
//this is adapter pattern
require 'vendor/autoload.php';

use Acme\Pattern\Adapter\eReaderAdapter;
use Acme\Pattern\Adapter\Kindle;
use Acme\Pattern\Adapter\Book;
use Acme\Pattern\Adapter\Nook;
use Acme\Pattern\Adapter\Person;

//usage

(new Person)->read(new Book);
echo '<br>';
(new Person)->read(new eReaderAdapter(new Kindle));
echo '<br>';
(new Person)->read(new eReaderAdapter(new Nook));
