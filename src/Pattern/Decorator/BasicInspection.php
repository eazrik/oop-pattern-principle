<?php namespace Acme\Pattern\Decorator;

class BasicInspection implements CarService
{
    /**
     * Method getCost
     *
     * @return mixed
     */
    public function getCost()
    {
        return 25;
    }

    /**
     * Method getDescription
     *
     * @return mixed
     */
    public function getDescription()
    {
        return 'Basic Inspection';
    }
}
