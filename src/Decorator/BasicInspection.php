<?php namespace Acme\Decorator;

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 15;
    }
    public function getDescription()
    {
        return 'Basic Inspection';
    }
}
