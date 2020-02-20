<?php namespace Acme\Pattern\Decorator;

class OilChange implements CarService
{
    protected $carService;

    /**
     * Method initialize
     *
     * @param CarService $carService Car
     *
     * @return mixed
     */
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    /**
     * Method getCost
     *
     * @return mixed
     */
    public function getCost()
    {
        return 25 + $this->carService->getCost();
    }

    /**
     * Method getDescription
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->carService->getDescription().' and Oil Change';
    }
}
