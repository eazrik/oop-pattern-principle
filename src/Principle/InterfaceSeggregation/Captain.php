<?php namespace Acme\Principle\InterfaceSeggregation;

//usage
class Captain
{
    /**
     * Method manage
     *
     * @param ManagableInterface $worker Data
     *
     * @return mixed|void
     */
    public function manage(ManagableInterface $worker)
    {
        return $worker->beManaged();
    }
}
