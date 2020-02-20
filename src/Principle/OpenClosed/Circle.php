<?php namespace Acme\Principle\OpenClosed;

class Circle implements ShapeInterface
{
    public $radius;

    /**
     * Method initialize
     *
     * @param $radius Radius
     *
     * @return mixed
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Method area
     *
     * @return mixed
     */
    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}
