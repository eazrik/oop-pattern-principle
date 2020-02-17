<?php

class TestObject {

    protected $name = '';

    protected $age = 0;

    public function setAge($age = 0)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function checkEligibility()
    {
        if ($this->age <= 14) {
            return var_dump("You are not eligible to vote");
        }
        return var_dump("You are eligible to vote");
    }
}

$test = new TestObject;

$test->setAge(25);

var_dump($test->checkEligibility());
