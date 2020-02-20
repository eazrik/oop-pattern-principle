<?php

namespace Acme\Pattern\Template;

class VeggieSub extends Sub
{
    /**
     * Method addPrimaryToppings
     *
     * @return mixed
     */
    public function addPrimaryToppings()
    {
        var_dump('add some veggies');

        return $this;
    }
}
