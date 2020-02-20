<?php
namespace Acme\Pattern\Adapter;

class Nook implements eReaderInterface
{
    /**
     * Method turnOn
     *
     * @return string
     */
    public function turnOn()
    {
        var_dump('turn the Nook on');
    }

    /**
     * Method pressNextButton
     *
     * @return string
     */
    public function pressNextButton()
    {
        var_dump('press the next button on the nook');
    }
}
