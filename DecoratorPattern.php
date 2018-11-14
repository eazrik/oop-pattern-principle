<?php
//this is decorator pattern
// You want to change or just behave in someway and you re feeling pressured into simply inheriting from another class
// just ask yourself, i inherit from that class, do i really need to pull in the entirety of that fnctionality?
// or do i instead need to simply adjust the behaviour of one or two methods?
// if that the case then maybe you can refer to the decorator pattern
interface CarService
{
    public function getCost();

    public function getDescription();
}

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

$service = new OilChange(new TireChange(new BasicInspection));

echo $service->getCost();
echo $service->getDescription();
