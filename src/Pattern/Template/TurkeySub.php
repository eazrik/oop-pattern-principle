<?php

namespace Acme\Pattern\Template;

class TurkeySub extends Sub
{
    /**
     * Method addPrimaryToppings
     *
     * @return mixed
     */
    public function addPrimaryToppings()
    {
        var_dump('add some turkey');

        return $this;
    }
}
