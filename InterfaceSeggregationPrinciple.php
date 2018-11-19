<?php

require 'vendor/autoload.php';

use Acme\InterfaceSeggregation\ManagableInterface;
use Acme\InterfaceSeggregation\HumanWorker;
use Acme\InterfaceSeggregation\AndroidWorker;

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
