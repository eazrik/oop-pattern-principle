<?php
//this is decorator pattern
// You want to change or just behave in someway and you re feeling pressured into simply inheriting from another class
// just ask yourself, i inherit from that class, do i really need to pull in the entirety of that fnctionality?
// or do i instead need to simply adjust the behaviour of one or two methods?
// if that the case then maybe you can refer to the decorator pattern
require 'vendor/autoload.php';

use Acme\Decorator\BasicInspection;
use Acme\Decorator\OilChange;
use Acme\Decorator\TireChange;

$service = new OilChange(new TireChange(new BasicInspection));

echo $service->getCost();
echo '<br>';
echo $service->getDescription();
