<?php namespace Acme\Principle\InterfaceSeggregation;

class AndroidWorker implements WorkableInterface, ManagableInterface
{
    /**
     * Method work
     *
     * @return string
     */
    public function work()
    {
        return 'android working';
    }

    /**
     * Method beManaged
     *
     * @return string
     */
    public function beManaged()
    {
        return $this->work();
    }
}
