<?php
namespace Acme\Pattern\Adapter;

class Kindle implements eReaderInterface
{
    /**
     * Method turnOn
     *
     * @return string
     */
    public function turnOn()
    {
        var_dump('turn the Kindle on');
    }

    /**
     * Method turnOn
     *
     * @return string
     */
    public function pressNextButton()
    {
        var_dump('press the next button on the kindle');
    }
}
