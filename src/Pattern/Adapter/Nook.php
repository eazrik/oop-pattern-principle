<?php
namespace Acme\Pattern\Adapter;

class Nook implements ElectronicReaderInterface
{
    /**
     * Method turnOn
     *
     * @return void
     */
    public function turnOn()
    {
        var_dump('turn the Nook on');
    }

    /**
     * Method pressNextButton
     *
     * @return void
     */
    public function pressNextButton()
    {
        var_dump('press the next button on the nook');
    }
}
