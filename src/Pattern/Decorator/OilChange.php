<?php namespace Acme\Pattern\Decorator;

class OilChange implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }
    public function getCost()
    {
        return 25 + $this->carService->getCost();
    }
    public function getDescription()
    {
        return $this->carService->getDescription().' and Oil Change';
    }
}
