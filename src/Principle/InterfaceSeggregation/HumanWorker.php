<?php namespace Acme\Principle\InterfaceSeggregation;

class HumanWorker implements WorkableInterface, SleepableInterface, ManagableInterface
{
    /**
     * Method work
     *
     * @return string
     */
    public function work()
    {
        return 'human working';
    }

    /**
     * Method sleep
     *
     * @return string
     */
    public function sleep()
    {
        return 'human sleeping';
    }

    /**
     * Method beManaged
     *
     * @return string
     */
    public function beManaged()
    {
        return
        $this->work().
        $this->sleep();
    }
}
