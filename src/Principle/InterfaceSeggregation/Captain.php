<?php namespace Acme\Principle\InterfaceSeggregation;

//usage
class Captain
{
    public function manage(ManagableInterface $worker)
    {
        return $worker->beManaged();
    }
}
