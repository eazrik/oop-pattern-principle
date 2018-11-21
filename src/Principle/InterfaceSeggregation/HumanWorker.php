<?php namespace Acme\Principle\InterfaceSeggregation;

class HumanWorker implements WorkableInterface, SleepableInterface, ManagableInterface
{
    public function work()
    {
        return 'human working';
    }

    public function sleep()
    {
        return 'human sleeping';
    }
    public function beManaged()
    {
        return
        $this->work().
        $this->sleep();
    }
}
