<?php

require 'vendor/autoload.php';

use Acme\InterfaceSeggregation\ManagableInterface;

interface WorkableInterface
{
    public function work();
}

interface SleepableInterface
{
    public function sleep();
}

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

//usage
class Captain
{
    public function manage(ManagableInterface $worker)
    {
        return $worker->beManaged();
    }
}

echo (new Captain)->manage(new AndroidWorker);
echo '<pre>';
echo (new Captain)->manage(new HumanWorker);
