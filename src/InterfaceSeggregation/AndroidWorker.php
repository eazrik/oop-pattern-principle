<?php namespace Acme\InterfaceSeggregation;

class AndroidWorker implements WorkableInterface, ManagableInterface
{
    public function work()
    {
        return 'android working';
    }
    public function beManaged()
    {
        return $this->work();
    }
}
