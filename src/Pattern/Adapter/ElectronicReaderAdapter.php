<?php
namespace Acme\Pattern\Adapter;

class ElectronicReaderAdapter implements BookInterface
{
    /**
     * Property $reader Reader
     */
    private $reader;

    /**
     * Method initialize
     *
     * @param $reader Reader
     *
     * @return string
     */
    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    /**
     * Method open
     *
     * @return string
     */
    public function open()
    {
        return $this->reader->turnOn();
    }

    /**
     * Method turnPage
     *
     * @return string
     */
    public function turnPage()
    {
        return $this->reader->pressNextButton();
    }
}
