<?php namespace Acme\Principle\OpenClosed;

class AreaCalculator
{
    /**
     * Method calculate
     *
     * @param $shapes Shapes
     *
     * @return mixed
     */
    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        //return array_sum($area);
        return $area;
    }
}
