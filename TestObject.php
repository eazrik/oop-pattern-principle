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
}

$test = new TestObject;

$test->setAge(90);
var_dump($test->getAge());