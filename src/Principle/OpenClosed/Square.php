<?php namespace Acme\Principle\OpenClosed;

class Square implements ShapeInterface
{
    public $width;
    public $height;

    /**
     * Method initialize
     *
     * @param $width Data
     * @param $height Data
     *
     * @return mixed
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Method area
     *
     * @return mixed
     */
    public function area()
    {
        return $this->width * $this->height;
    }
}
