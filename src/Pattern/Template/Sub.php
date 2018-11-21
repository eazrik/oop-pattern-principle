<?php

namespace Acme\Pattern\Template;

abstract class Sub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }
    protected function layBread()
    {
        var_dump('laying down the bread');

        return $this;
    }

    protected function addLettuce()
    {
        var_dump('add some lettuce');

        return $this;
    }

    protected function addSauces()
    {
        var_dump('add sauces');

        return $this;
    }

    abstract protected function addPrimaryToppings();
}
