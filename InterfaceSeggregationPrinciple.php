<?php

require 'vendor/autoload.php';

use Acme\Principle\InterfaceSeggregation\ManagableInterface;
use Acme\Principle\InterfaceSeggregation\HumanWorker;
use Acme\Principle\InterfaceSeggregation\AndroidWorker;

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
