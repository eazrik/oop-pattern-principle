<?php

interface ManagableInterface
{
    public function beManaged();
}

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
        $this->work();
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
        $this->work();
    }
}

//usage
class Captain
{
    public function manage(ManagableInterface $worker)
    {
        $worker->beManaged();
    }
}

echo $test = (new Captain)->manage(new AndroidWorker);

echo 'test';
