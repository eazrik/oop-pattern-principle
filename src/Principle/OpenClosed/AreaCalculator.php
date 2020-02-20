<?php namespace Acme\Principle\OpenClosed;

class AreaCalculator
{
    /**
     * Method calculate
     *
     * @param string $shapes Shapes
     *
     * @return mixed
     */
    public function calculate($shapes)
    {
        $area = [];

        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        //return array_sum($area);
        return $area;
    }
}
