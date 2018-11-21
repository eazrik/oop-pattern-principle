<?php namespace Acme\Principle\OpenClosed;

class AreaCalculator
{
    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        //return array_sum($area);
        return $area;
    }
}
