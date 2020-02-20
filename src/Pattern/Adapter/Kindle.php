<?php
namespace Acme\Pattern\Adapter;

class Kindle implements ElectronicReaderInterface
{
    /**
     * Method turnOn
     *
     * @return void
     */
    public function turnOn()
    {
        var_dump('turn the Kindle on');
    }

    /**
     * Method turnOn
     *
     * @return void
     */
    public function pressNextButton()
    {
        var_dump('press the next button on the kindle');
    }
}
