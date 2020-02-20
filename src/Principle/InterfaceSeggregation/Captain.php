<?php namespace Acme\Principle\InterfaceSeggregation;

//usage
class Captain
{
    /**
     * Method manage
     *
     * @param $worker Data
     *
     * @return string
     */
    public function manage(ManagableInterface $worker)
    {
        return $worker->beManaged();
    }
}
