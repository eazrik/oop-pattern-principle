<?php namespace Acme\Decorator;

class TireChange implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }
    public function getCost()
    {
        return 10 + $this->carService->getCost();
    }
    public function getDescription()
    {
        return $this->carService->getDescription().' and Tire Change';
    }
}
