<?php namespace Acme\Principle\InterfaceSeggregation;

//usage
class Captain
{
    /**
     * Method manage
     *
     * @return string
     */
    public function manage(ManagableInterface $worker)
    {
        return $worker->beManaged();
    }
}
