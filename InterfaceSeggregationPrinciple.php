<?php

require 'vendor/autoload.php';

use Acme\Principle\InterfaceSeggregation\HumanWorker;
use Acme\Principle\InterfaceSeggregation\AndroidWorker;
use Acme\Principle\InterfaceSeggregation\Captain;

echo (new Captain)->manage(new AndroidWorker);
echo '<pre>';
echo (new Captain)->manage(new HumanWorker);
