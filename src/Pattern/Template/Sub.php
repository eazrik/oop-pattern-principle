<?php

namespace Acme\Pattern\Template;

abstract class Sub
{
    /**
     * Method make
     *
     * @return mixed
     */
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    /**
     * Method layBread
     *
     * @return mixed
     */
    protected function layBread()
    {
        var_dump('laying down the bread');

        return $this;
    }

    /**
     * Method addLettuce
     *
     * @return mixed
     */
    protected function addLettuce()
    {
        var_dump('add some lettuce');

        return $this;
    }

    /**
     * Method addSauces
     *
     * @return mixed
     */
    protected function addSauces()
    {
        var_dump('add sauces');

        return $this;
    }

    /**
     * Method addPrimaryToppings
     *
     * @return mixed
     */
    abstract protected function addPrimaryToppings();
}
